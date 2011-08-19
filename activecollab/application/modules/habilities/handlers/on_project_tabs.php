<?php

  /**
   * Habilities module on_project_tabs event handler
   *
   * @package activeCollab.modules.habilities
   * @subpackage handlers
   */
  
  /**
   * Handle on prepare project overview event
   *
   * @param NamedList $tabs
   * @param User $logged_user
   * @param Project $project
   * @return null
   */
  function habilities_handle_on_project_tabs(&$tabs, &$logged_user, &$project) {
    if($logged_user->getProjectPermission('hability', $project) >= PROJECT_PERMISSION_ACCESS) {
      $tabs->add('habilities', array(
        'text' => lang('Habilities'),
        'url' => habilities_module_url($project)
      ));
    } // if
  } // habilities_handle_on_project_tabs

?>