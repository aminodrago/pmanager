<?php

  /**
   * Habilities handle on_project_object_moved event
   *
   * @package activeCollab.modules.habilities
   * @subpackage handlers
   */
  
  /**
   * Handle on_project_object_moved event
   *
   * @param ProjectObject $object
   * @param Project $source
   * @param Project $destination
   * @return null
   */
  function habilities_handle_on_project_object_moved(&$object, &$source, &$destination) {
    if(instance_of($object, 'Hability')) {
      $object->setHabilityId(Habilities::findNextHabilityIdByProject($destination));
      $object->save();
    } // if
  } // habilities_handle_on_project_object_moved

?>