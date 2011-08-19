<?php

  /**
   * Reports module on_build_menu event handler
   *
   * @package activeCollab.modules.reports
   * @subpackage handlers
   */

  /**
   * Build menu
   *
   * @param Menu $menu
   * @param User $user
   * @return array
   */
  function reports_handle_on_build_menu(&$menu, &$user) {
    if($user->getSystemPermission('can_use_reports')) {

      $menu->addToGroup(array(
        new MenuItem('reports', lang('Reports'), assemble_url('reports'), get_image_url('icon.gif', REPORTS_MODULE))
      ), 'main');
    } // if
  } // status_handle_on_build_menu

?>