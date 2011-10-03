<?php

  /**
   * Habilities handle on_project_permissions event
   *
   * @package activeCollab.modules.habilities
   * @subpackage handlers
   */

  /**
   * Handle on_project_permissions event
   *
   * @param array $permissions
   * @return null
   */
  function habilities_handle_on_project_permissions(&$permissions) {
  	$permissions['hability'] = lang('Habilities');
  } // habilities_handle_on_project_permissions

?>