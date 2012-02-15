<?php

  /**
   * Charts module on_project_tabs event handler
   *
   * @package activeCollab.modules.charts
   * @subpackage handlers
   */
  
  /**
   * Handle on prepare project overview event
   *
   * @param NamedList $tabs
   * @param Project $project
   * @return null
   */
  function charts_handle_on_project_tabs(&$tabs, &$logged_user, &$project) {
    $tabs->add('charts', array(
      'text' => lang('Charts'),
      'url' => charts_module_url($project),
    ));
  } // files_handle_on_project_tabs

?>
