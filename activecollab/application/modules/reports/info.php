<?php

  /**
   * Set module information
   *
   * @package activeCollab.modules.reports
   */

  // This file need to be included from the Module object
  if(!isset($this) || !instance_of($this, 'Module')) {
    return;
  } // if

  // Set info
  $this->info = array(
    'description' => 'See extensive reports - completion trend, hours worked, iteration charts, most active and longest open tickets.',
    'version' => '1.4',
    'important' => 'By default this module is turned off for all users. Go to Administration > Roles and set can_use_reports permission to Yes for roles you want to have access to this feature. Scheduled tasks and Tickets module must be enabled and working for this module to work.',
    'uninstall_message' => 'Module will be deactivated. All reporting data generated using it will be deleted.',
  );

?>