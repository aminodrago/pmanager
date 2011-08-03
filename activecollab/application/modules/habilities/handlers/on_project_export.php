<?php

  /**
   * Habilities module on_project_export event handler
   *
   * @package activeCollab.modules.habilities
   * @subpackage handlers
   */

  /**
   * Handle project exporting
   *
   * @param array $exportable_modules
   * @param Project $project
   * @return null
   */
  function habilities_handle_on_project_export(&$exportable_modules, $project) {
    $exportable_modules[] = array(
      "url" => assemble_url('project_habilities_export',array('project_id' => $project->getId())),
      "title" => lang('Exporting hability data...'),
      "module" => HABILITIES_MODULE,
      "label" => HABILITIES_MODULE,
    );
  } //habilities_handle_on_project_export


?>