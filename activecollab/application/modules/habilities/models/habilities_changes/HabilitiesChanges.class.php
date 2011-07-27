<?php

  /**
   * Ticket changes manager class
   *
   * @package activeCollab.modules.tickets
   * @subpackage models
   */
  class HabilityChanges {
    
    /**
     * Return array of ticket changes
     *
     * @param Ticket $ticket
     * @param integer $count
     * @return array
     */
    function findByHability($hability, $count = null) {
      $count = (integer) $count;
      
      if($count < 1) {
        $rows = db_execute_all('SELECT * FROM ' . TABLE_PREFIX . 'habilities WHERE hability_id = ? ORDER BY version DESC', $hability->getId());
      } else {
        $rows = db_execute_all('SELECT * FROM ' . TABLE_PREFIX . "habilities WHERE hability_id = ? ORDER BY version DESC LIMIT 0, $count", $hability->getId());
      } // if
      
      if(is_foreachable($rows)) {
        $changes = array();
        foreach($rows as $row) {
          $change = new HabilityChange();
          
          $change->setHabilityId($hability->getId());
          $change->setVersion($row['version']);
          $change->changes = unserialize($row['changes']);
          $change->created_on = $row['created_on'] ? new DateTimeValue($row['created_on']) : null;
          $change->created_by_id = (integer) $row['created_by_id'];
          $change->created_by_name = $row['created_by_name'];
          $change->created_by_email = $row['created_by_email'];
          
          $changes[$row['version']] = $change;
        } // foreach
        return $changes;
      } else {
        return null;
      } // if
    } // findByHability
    
    /**
     * Return total number of changes recorded for a specific hability
     *
     * @param Hability $hability
     * @return integer
     */
    function countByHability($hability) {
      return (integer) array_var(db_execute_one("SELECT COUNT(id) AS 'row_count' FROM " . TABLE_PREFIX . 'habilities WHERE hability_id = ?', $hability->getId()), 'row_count');
    } // countByHability
    
  } // HabilityChanges

?>