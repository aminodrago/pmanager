<?php

  /**
   * Reports module definition
   *
   * @package activeCollab.modules.reports
   * @subpackage models
   */
  class ReportsModule extends Module {

    /**
     * Plain module name
     *
     * @var string
     */
    var $name = 'reports';

    /**
     * Is system module flag
     *
     * @var boolean
     */
    var $is_system = false;

    /**
     * Module version
     *
     * @var string
     */
    var $version = '1.4';

    // ---------------------------------------------------
    //  Events and Routes
    // ---------------------------------------------------

    /**
     * Define module routes
     *
     * @param Router $r
     * @return null
     */
    function defineRoutes(&$router) {
      $router->map('reports', 'reports/', array('controller' => 'reports', 'action' => 'index'), array());
      $router->map('reports_get', 'reports/get', array('controller' => 'reports', 'action' => 'get'), array());
    } // defineRoutes

    /**
     * Define event handlers
     *
     * @param EventsManager $events
     * @return null
     */
    function defineHandlers(&$events) {
      $events->listen('on_daily', 'on_daily');
      $events->listen('on_build_menu', 'on_build_menu');
      $events->listen('on_system_permissions', 'on_system_permissions');
    } // defineHandlers

    // ---------------------------------------------------
    //  (Un)Install
    // ---------------------------------------------------

	/**
     * Returns true if this module can be installed
     *
     * @param array $log
     * @return boolean
     */
    function canBeInstalled(&$log) {
      if(module_loaded('tickets') || module_loaded('pages')) {
        $log[] = lang('OK: Tickets / Pages module is active.');
        $last_daily = ConfigOptions::findByName('last_daily_activity', 'system');
        if (is_int($last_daily->getValue())) {
        	$log[] = lang('OK: Scheduled tasks are active.');
        } else {
        	$log[] = lang('Scheduled Tasks (daily) has never run. This module requires daily scheduled task working.');
        	return false;
        }
      } else {
        $log[] = lang('This module requires Tickets module enabled.');
        return false;
      } // if

      return true;
    } // canBeInstalled
    /**
     * Install module
     *
     * @param void
     * @return boolean
     */
    function install() {
      	$engine = defined('DB_CAN_TRANSACT') && DB_CAN_TRANSACT ? 'ENGINE=InnoDB' : '';
		$charset = defined('DB_CHARSET') && DB_CHARSET == 'utf8' ? 'DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci' : '';

		// Get master categories
		$master_categories = ConfigOptions::getValue("ticket_categories");
		$pages_categories = ConfigOptions::findByName('pages_categories', 'system');
		if ($pages_categories != null) {
			$pages_categories = $pages_categories->getValue();
			if (count($pages_categories) > 0) {
				$master_categories = array_merge($master_categories, $pages_categories);
			}
		}

		db_execute("DROP TABLE IF EXISTS `" . TABLE_PREFIX . "rep_tickets_snapshot`");

		// Snapshot table query
		$query = "CREATE TABLE `" . TABLE_PREFIX . "rep_tickets_snapshot` (
		`date` date NOT NULL,
		`project_id` smallint(5) NOT NULL,
		`iteration` smallint(5) NOT NULL,
		`total` int(6) NOT NULL,
		`open` int(6) NOT NULL,
		`closed` int(6) NOT NULL,
		`estimated_hours` double(10,2) NOT NULL,
		`actual_hours` double(10,2) NOT NULL,
		`others_open` smallint(5) NOT NULL,
		`others_closed` smallint(5) NOT NULL,";
		// Create fields for master categories
		if(is_foreachable($master_categories)) {
			$count = count($master_categories);
			for($i = 0; $i < $count; $i++) {
				$query .= " `cat".$i."_open` smallint(5) NOT NULL,
					`cat".$i."_closed` smallint(5) NOT NULL, ";
			} // for
		} // if

		$query .= "PRIMARY KEY  (`date`,`project_id`),
			KEY `iteration` (`iteration`)
			) $engine $charset COMMENT='Iteration wise tickets + pages count snapshot';";
		// Create snapshot table
		db_execute($query);

		// Configuration Options - Default iteration of 7 days (a week)
		$this->addConfigOption('reports_iteration_days', SYSTEM_CONFIG_OPTION, 7);
		$this->addConfigOption('reports_update_frequency', SYSTEM_CONFIG_OPTION, 'D'); // Possible options - W: weekly, D: Daily

		// Remove "Others" from Master Categories if it exists
		$master_categories = array_diff($master_categories, array("Others", "others"));
		$this->addConfigOption('reports_master_categories', SYSTEM_CONFIG_OPTION, $master_categories);

		$return = parent::install();
		if (!is_error($return))
		{
			// Create initial snapshot now
			require_once APPLICATION_PATH . "/modules/reports/models/Reports.class.php";
			ini_set('memory_limit', '256M');
			ini_set('max_execution_time', '600');
			// Turn off debugging while we take initial snapshot to save memory
			$debug = DEBUG;
			define(DEBUG, DEBUG_OFF);
			Reports::dailyHandler();
			define(DEBUG, $debug);
		}
		return $return;
    } // install

    /**
     * Uninstall this module
     *
     * @param void
     * @return boolean
     */
    function uninstall() {
      db_execute("DROP TABLE IF EXISTS `" . TABLE_PREFIX . "rep_tickets_snapshot`");
      db_execute("DROP VIEW IF EXISTS `".TABLE_PREFIX."view_ticket_categories`");
      db_execute("DROP VIEW IF EXISTS `".TABLE_PREFIX."view_ticket_comment_count`");

      return parent::uninstall();
    } // uninstall

    /**
     * Get module display name
     *
     * @return string
     */
    function getDisplayName() {
      return lang('Reports');
    } // getDisplayName

    /**
     * Return module description
     *
     * @param void
     * @return string
     */
    function getDescription() {
      return lang('See extensive reports - completion trend, hours worked, iteration charts, most active and longest open tickets. Go to Administration > Roles and set can_use_reports permission to Yes for roles you want to have access to this feature.');
    } // getDescription

    /**
     * Return module uninstallation message
     *
     * @param void
     * @return string
     */
    function getUninstallMessage() {
      return lang('Module will be deactivated. All reporting data generated using it will be deleted.');
    } // getUninstallMessage

  }

?>