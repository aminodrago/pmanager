<?php

  /**
   * Init habilities module
   *
   * @package activeCollab.modules.habilities
   */
  
  define('HABILITIES_MODULE', 'habilities');
  define('HABILITIES_MODULE_PATH', APPLICATION_PATH . '/modules/habilities');
  
  set_for_autoload(array(
    'Hability' => HABILITIES_MODULE_PATH . '/models/habilities/Hability.class.php',
    'Habilities' => HABILITIES_MODULE_PATH . '/models/habilities/Hability.class.php',
    'HabilityChange' => HABILITIES_MODULE_PATH . '/models/hability_changes/HabilityChange.class.php',
    'HabilityChanges' => HABILITIES_MODULE_PATH . '/models/hability_changes/HabilityChanges.class.php'
  ));
  
  /**
   * Return section URL
   *
   * @param Project $project
   * @return string
   */
  function habilities_module_url($project) {
    return assemble_url('project_habilities', array('project_id' => $project->getId()));
  } // habilities_module_url
  
  /**
   * Return add hability URL
   *
   * @param Project $project
   * @param array $additional_params
   * @return string
   */
  function habilities_module_add_hability_url($project, $additional_params = null) {
    $params = array('project_id' => $project->getId());
    
    if($additional_params !== null) {
      $params = array_merge($params, $additional_params);
    } // if
    
    return assemble_url('project_habilities_add', $params);
  } // habilities_module_add_hability_url
  
  // ---------------------------------------------------
  //  Portal public methods
  // ---------------------------------------------------
  
  /**
   * Return portal habilities section URL
   *
   * @param Portal $portal
   * @return string
   */
  function portal_habilities_module_url($portal) {
  	return assemble_url('portal_habilities', array('portal_name' => $portal->getSlug()));
  } // portal_habilities_module_url
  
  /**
   * Return add hability URL via public portal
   *
   * @param Portal $portal
   * @param array $additional_params
   * @return string
   */
  function portal_habilities_module_add_hability_url($portal, $additional_params = null) {
  	$params = array('portal_name' => $portal->getSlug());
  	
  	if($additional_params !== null) {
  		$params = array_merge($params, $additional_params);
  	} // if
  	
  	return assemble_url('portal_habilities_add', $params);
  } // portal_habilities_module_add_hability_url

?>