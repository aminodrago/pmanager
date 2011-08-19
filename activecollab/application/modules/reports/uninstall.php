<?php

  /**
   * Reports module uninstallation file
   *
   * @package activeCollab.modules.reports
   */

  db_execute("DROP TABLE IF EXISTS `" . TABLE_PREFIX . "rep_tickets_snapshot`");
  db_execute("DROP VIEW IF EXISTS `".TABLE_PREFIX."view_ticket_categories`");
  db_execute("DROP VIEW IF EXISTS `".TABLE_PREFIX."view_ticket_comment_count`");

?>