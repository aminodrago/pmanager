<?php

  /**
   * Reports module event handlers
   *
   * @package activeCollab.modules.reports
   */

  // Cron events
  $this->listen('on_daily', 'on_daily', REPORTS_MODULE);
  $this->listen('on_build_menu', 'on_build_menu', REPORTS_MODULE);
  $this->listen('on_system_permissions', 'on_system_permissions', REPORTS_MODULE);
?>