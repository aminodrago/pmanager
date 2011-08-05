<?php

  /**
   * Installation routine for Reports module
   *
   * @package activeCollab.modules.reports
   */

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
	db_execute("DROP VIEW IF EXISTS `".TABLE_PREFIX."view_ticket_categories`");
	db_execute("DROP VIEW IF EXISTS `".TABLE_PREFIX."view_ticket_comment_count`");

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
	$option = new ConfigOption();
	$option->setName('reports_iteration_days');
	$option->setModule('reports');
	$option->setType('system');
	$option->setValue(7);
	$option->save();

	$option = new ConfigOption();
	$option->setName('reports_update_frequency');
	$option->setModule('reports');
	$option->setType('system');
	$option->setValue('D'); // Possible options - W: weekly, D: Daily
	$option->save();

	$option = new ConfigOption();
	$option->setName('reports_master_categories');
	$option->setModule('reports');
	$option->setType('system');
	// Remove "Others" from Master Categories if it exists
	$master_categories = array_diff($master_categories, array("Others", "others"));
	$option->setValue($master_categories);
	$option->save();

	// Create initial snapshot now
	require_once APPLICATION_PATH . "/modules/reports/models/Reports.class.php";
	ini_set('memory_limit', '256M');
	ini_set('max_execution_time', '600');
	// Turn off debugging while we take initial snapshot to save memory
	$debug = DEBUG;
	define(DEBUG, DEBUG_OFF);
	Reports::dailyHandler();
	define(DEBUG, $debug);
?>