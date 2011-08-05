<?php

  /**
   * Reports update module definitions for build script
   *
   * @package activeCollab.modules.reports
   */

  return array(

    // Config options
    'config_options' => array(
      new ConfigOptionDefinition('reports_iteration_days', 'reports', 'system', null),
      new ConfigOptionDefinition('reports_master_categories', 'reports', 'system', null),
    ),

  );

?>