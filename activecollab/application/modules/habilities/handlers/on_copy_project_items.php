<?php

  /**
   * Habilities handle on_copy_project_items event
   *
   * @package activeCollab.modules.habilities
   * @subpackage handlers
   */

  /**
   * Handle on_copy_project_items event
   *
   * @param Project $from
   * @param Project $to
   * @param array $milestones_map
   * @param array $categories_map
   * @return null
   */
  function habilities_handle_on_copy_project_items(&$from, &$to, $milestones_map, $categories_map) {
  	$tickets = Habilities::findByProject($from, null, STATE_VISIBLE, VISIBILITY_PRIVATE);
  	if(is_foreachable($habilities)) {
  	  foreach($habilities as $hability) {
  	    $hability->copyToProject($to, array_var($milestones_map, $ticket->getMilestoneId()), array_var($categories_map, $hability->getParentId()), array('Task', 'Attachment'));
  	  } // foreach
  	} // if
  } // habilities_handle_on_copy_project_items

?>