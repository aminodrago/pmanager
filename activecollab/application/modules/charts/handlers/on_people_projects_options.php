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
  function charts_handle_on_people_projects_options(&$people_projects, &$options) {
    if (CHARTS_MODULE_HAVE_FPDF == true) {
      $people_projects->wireframe->addPageAction(lang('Download PDF Gantt Charts'), assemble_url('charts_profile_projects', array('company_id' => $people_projects->active_company->getId(), 'user_id' => $people_projects->active_user->getId(), 'type' => 'pdf')));
    }

    $options = new NamedList();
    $options->add('charts_export_xml', array(
        'text'    => lang('MS Projects XML'),
        'url'     => assemble_url('charts_profile_projects', array('company_id' => $people_projects->active_company->getId(), 'user_id' => $people_projects->active_user->getId(), 'type' => 'xml')),
    ));
    $options->add('charts_export_mpx', array(
        'text'    => lang('MS Projects MPX'),
        'url'     => assemble_url('charts_profile_projects', array('company_id' => $people_projects->active_company->getId(), 'user_id' => $people_projects->active_user->getId(), 'type' => 'mpx')),
    ));

      $people_projects->wireframe->addPageAction(lang('Export as...'), '#', $options->data, array('id' => 'people_projects_options'), 1000);

  } // charts_handle_on_people_projects_options

?>
