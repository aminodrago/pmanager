<?php

  /**
   * Init reports module
   *
   * @package activeCollab.modules.reports
   */

  define('REPORTS_MODULE', 'reports');
  define('REPORTS_MODULE_PATH', APPLICATION_PATH . '/modules/reports');

  set_for_autoload(array(
    'Reports' => REPORTS_MODULE_PATH . '/models/Reports.class.php',
  ));

  /**
   * Return section URL
   *
   * @return string
   */
  function reports_module_url() {
    return assemble_url('reports', array());
  } // reports_module_url

  /**
   * Return get report data URL
   *
   * @return string
   */
  function reports_module_get_url() {
    return assemble_url('reports_get', array());
  } // reports_module_get_url


?>