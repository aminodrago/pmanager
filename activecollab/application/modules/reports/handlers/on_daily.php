<?php

  /**
   * Reports module on_daily event handler
   *
   * @package activeCollab.modules.reports
   * @subpackage handlers
   */

  /**
   * Insert snapshot stats for reporting to table
   *
   * @return null
   */
  function reports_handle_on_daily() {

  	/**
  	 * Insert REPORTING data to snapshot tables
  	 * We do this at the start of the week for last week
  	 */
  	if (ConfigOptions::getValue('reports_update_frequency') == 'D' ||
  	   (ConfigOptions::getValue('reports_update_frequency') == 'W' && date('w', time()) == ConfigOptions::getValue('time_first_week_day')) )
	{
		return Reports::dailyHandler();
	}
  } // reports_handle_on_daily




?>