<?php

  /**
   * Habilities module definition
   *
   * @package activeCollab.modules.habilities
   * @subpackage models
   */
  class HabilitiesModule extends Module {
    
    /**
     * Plain module name
     *
     * @var string
     */
    var $name = 'habilities';
    
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
    var $version = '1.0';
    
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
      $router->map('project_habilities', 'projects/:project_id/habilities', array('controller' => 'habilities', 'action' => 'index'), array('project_id' => '\d+'));
      $router->map('project_habilities_archive', 'projects/:project_id/habilities/archive', array('controller' => 'habilities', 'action' => 'archive'), array('project_id' => '\d+'));
      $router->map('project_habilities_mass_edit', 'projects/:project_id/habilities/mass-edit', array('controller' => 'habilities', 'action' => 'mass_update'), array('project_id' => '\d+'));
      $router->map('project_habilities_add', 'projects/:project_id/habilities/add', array('controller' => 'habilities', 'action' => 'add'), array('project_id' => '\d+'));
      $router->map('project_habilities_quick_add', 'projects/:project_id/habilities/quick-add', array('controller' => 'habilities', 'action' => 'quick_add'), array('project_id' => '\d+'));
      $router->map('project_habilities_export', 'projects/:project_id/habilities/export', array('controller' => 'habilities', 'action' => 'export'), array('project_id' => '\d+'));
      $router->map('project_habilities_reorder', 'projects/:project_id/habilities/reorder', array('controller' => 'habilities', 'action' => 'reorder_habilities'), array('project_id' => '\d+'));
      
      $router->map('project_hability', 'projects/:project_id/habilities/:hability_id', array('controller' => 'habilities', 'action' => 'view'), array('project_id' => '\d+', 'ticket_id' => '\d+'));
      $router->map('project_hability_edit', 'projects/:project_id/habilities/:hability_id/edit', array('controller' => 'habilities', 'action' => 'edit'), array('project_id' => '\d+', 'ticket_id' => '\d+'));
      $router->map('project_hability_changes', 'projects/:project_id/habilities/:hability_id/changes', array('controller' => 'habilities', 'action' => 'changes'), array('project_id' => '\d+', 'hability_id' => '\d+'));
    } // defineRoutes
    
    /**
     * Define event handlers
     *
     * @param EventsManager $events
     * @return null
     */
    function defineHandlers(&$events) {
      $events->listen('on_get_project_object_types', 'on_get_project_object_types');
      $events->listen('on_get_completable_project_object_types', 'on_get_completable_project_object_types');
      $events->listen('on_project_tabs', 'on_project_tabs');
      $events->listen('on_milestone_objects', 'on_milestone_objects');
      $events->listen('on_milestone_objects_by_visibility', 'on_milestone_objects_by_visibility');
      $events->listen('on_portal_milestone_objects', 'on_portal_milestone_objects');
      $events->listen('on_milestone_add_links', 'on_milestone_add_links');
      $events->listen('on_portal_milestone_add_links', 'on_portal_milestone_add_links');
      $events->listen('on_user_cleanup', 'on_user_cleanup');
      $events->listen('on_quick_add', 'on_quick_add');
      $events->listen('on_master_categories', 'on_master_categories');
      $events->listen('on_project_export', 'on_project_export');
      $events->listen('on_project_object_moved', 'on_project_object_moved');
      $events->listen('on_copy_project_items', 'on_copy_project_items');
      $events->listen('on_project_permissions', 'on_project_permissions');
      $events->listen('on_portal_permissions', 'on_portal_permissions');
    } // defineHandlers
    
    // ---------------------------------------------------
    //  (Un)Install
    // ---------------------------------------------------
    
    /**
     * Install module
     *
     * @param void
     * @return boolean
     */
    function install() {
      $storage_engine = defined('DB_CAN_TRANSACT') && DB_CAN_TRANSACT ? 'ENGINE=InnoDB' : '';
      $default_charset = defined('DB_CHARSET') && (DB_CHARSET == 'utf8') ? 'DEFAULT CHARSET=utf8' : '';
			
			db_execute("CREATE TABLE " . TABLE_PREFIX . "hability (
				hability_id int(11) NOT NULL AUTO_INCREMENT,
				hability_name varchar(100) NOT NULL,
				hability_order tinyint(2) NOT NULL,
				PRIMARY KEY (hability_id)
			) $storange_engine $default_charseet;");
    
      $this->addConfigOption('hability_categories', SYSTEM_CONFIG_OPTION, array('General'));
      
      return parent::install();
    } // install
    
    /**
     * Uninstall this module
     *
     * @param void
     * @return boolean
     */
    function uninstall() {
      db_execute("DROP TABLE IF EXISTS " . TABLE_PREFIX . "habilities");
      
      return parent::uninstall();
    } // uninstall
    
    /**
     * Get module display name
     *
     * @return string
     */
    function getDisplayName() {
      return lang('Habilities');
    } // getDisplayName
    
    /**
     * Return module description
     *
     * @param void
     * @return string
     */
    function getDescription() {
      return lang('Add skills and habilities to resources and users');
    } // getDescription
    
    /**
     * Return module uninstallation message
     *
     * @param void
     * @return string
     */
    function getUninstallMessage() {
      return lang('Module will be deactivated. All habilities from all projects will be deleted');
    } // getUninstallMessage
    
  }

?>