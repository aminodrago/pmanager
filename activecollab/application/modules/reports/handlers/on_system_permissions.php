<?php

  /**
   * Reports on_system_permissions handler
   *
   * @package activeCollab.modules.reports
   * @subpackage handlers
   */

  /**
   * Handle on_system_permissions
   *
   * @param array $permissions
   * @return null
   */
  function reports_handle_on_system_permissions(&$permissions) {
  	$permissions = array_merge($permissions, array(
  	  'can_use_reports'
  	));
  } // reports_handle_on_system_permissions

?>