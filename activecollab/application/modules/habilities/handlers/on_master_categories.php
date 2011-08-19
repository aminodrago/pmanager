<?php

  /**
   * on_master_categories handler definition
   *
   * @package activeCollab.modules.habilities
   * @subpackage handlers
   */

  /**
   * Handle on_master_categories event
   *
   * @param array $categories
   * @return null
   */
  function habilities_handle_on_master_categories(&$categories) {
  	$categories[] = array(
  	  'name'       => 'hability_categories',
  	  'label'      => lang('Hability categories'),
  	  'value'      => ConfigOptions::getValue('hability_categories'),
  	  'module'     => HABILITIES_MODULE,
  	  'controller' => 'habilities',
  	);
  } // habilities_handle_on_master_categories

?>