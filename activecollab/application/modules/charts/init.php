<?php

  /**
   * Init charts module
   *
   * @package activeCollab.modules.charts
   */
  
  define('CHARTS_MODULE', 'charts');
  define('CHARTS_MODULE_PATH', APPLICATION_PATH . '/modules/charts');
  $charts_module_path = CHARTS_MODULE_PATH;

  /**
   * Determine if we have access to the FPDF library and define
   * CHARTS_MODULE_HAVE_FPDF accordingly.
  **/
  // Turn off warnings while we try to include fpdf.php
  $CHARTS_MODULE_HAVE_FPDF = false;
  error_reporting(E_ALL & ~E_WARNING);
  $fpdf_paths=array('fpdf.php','fpdf/fpdf.php');
  foreach ($fpdf_paths as $fpdf_path) {
    include_once($fpdf_path);
    if (class_exists("FPDF")) {
      $CHARTS_MODULE_HAVE_FPDF = true;
      break; # No need to keep trying
    }
  }
  // Turn on warnings
  error_reporting(E_ALL);
  if ($CHARTS_MODULE_HAVE_FPDF) {
    define('CHARTS_MODULE_HAVE_FPDF', true);
  } else {
    define('CHARTS_MODULE_HAVE_FPDF', false);
  }
  
  /**
   * Return section URL
   *
   * @param Project $project
   * @param integer $page
   * @return string
   */
  function charts_module_url($project, $additional_params = null) {
        $params = array('project_id' => $project->getId());
        if(is_array($additional_params)) {
          $params = array_merge($params, $additional_params);
        } // if
        
        return assemble_url('charts', $params);
  } // charts_module_url


?>
