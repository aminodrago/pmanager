<?php
  /**
  * Routes file for reports module
  *
  * @author Nirav Mehta <nirav.mehta@magnettechnologies.com>
  */
  $this->map('reports', 'reports/', array('module' => REPORTS_MODULE, 'controller' => 'reports', 'action' => 'index'), array());
  $this->map('reports_get', 'reports/get', array('module' => REPORTS_MODULE, 'controller' => 'reports', 'action' => 'get'), array());
?>