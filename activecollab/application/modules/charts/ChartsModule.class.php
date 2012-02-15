<?php

  /**
   * ChartsModule module definition
   *
   * @package activeCollab.modules.saf_wiki
   * @subpackage models
   */
  class ChartsModule extends Module {
    
    /**
     * Plain module name
     *
     * @var string
     */
    var $name = 'charts';
    
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
    var $version = '0.5';
    
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
      # Maps to ChartsController
      $router->map('charts', 'projects/:project_id/charts', array('controller' => 'charts', 'action' => 'index'), array('project_id' => '\d+'));
      $router->map('charts_dload_pdf', 'projects/:project_id/charts/dload_pdf', array('controller' => 'charts', 'action' => 'dload_pdf'), array('project_id' => '\d+'));
      $router->map('charts_dload_mpx', 'projects/:project_id/charts/dload_mpx', array('controller' => 'charts', 'action' => 'dload_mpx'), array('project_id' => '\d+'));
      $router->map('charts_dload_mpxml', 'projects/:project_id/charts/dload_mpxml', array('controller' => 'charts', 'action' => 'dload_mpxml'), array('project_id' => '\d+'));

      # Maps to ChartsPeopleProjects
      $map = $router->map('charts_profile_projects', 'people/:company_id/users/:user_id/charts/people_projects', array('controller' => 'ChartsPeopleProjects', 'action' => 'people_projects'), array('type' => '\s+'));
      #error_log("LHHD: " . var_export($map,1));

    } // defineRoutes
    
    /**
     * Define event handlers
     *
     * @param EventsManager $events
     * @return null
     */
    function defineHandlers(&$events) {
      $events->listen('on_project_tabs', 'on_project_tabs');
      $events->listen('on_people_projects_options','on_people_projects_options');
      $events->listen('on_hourly', 'on_hourly');
    } // defineHandlers
    
    // ---------------------------------------------------
    //  Un(Install)
    // ---------------------------------------------------
    
    /**
     * Install module
     *
     * @param void
     * @return boolean
     */
    function install() {
    	return parent::install();
    } // install
    
    /**
     * Uninstall module
     *
     * @param void
     * @return boolean
     */
    function uninstall() {
      return parent::uninstall();
    } // uninstall
    
    /**
     * Get module display name
     *
     * @return string
     */
    function getDisplayName() {
      return lang('Charts');
    } // getDisplayName
    
    /**
     * Return module description
     *
     * @param void
     * @return string
     */
    function getDescription() {
      return lang('Adds project charts.');
    } // getDescription
    
    /**
     * Return module uninstallation message
     *
     * @param void
     * @return string
     */
    function getUninstallMessage() {
      return lang('Module will be deactivated. All data generated using it will be deleted');
    } // getUninstallMessage
    
  }

?>
