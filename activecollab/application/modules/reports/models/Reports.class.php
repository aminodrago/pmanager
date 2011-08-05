<?php

  /**
   * Reports class
   *
   * @package activeCollab.modules.reports
   * @subpackage models
   */
  class Reports {

  	/**
  	 * Get a list of projects this user has access to.
  	 *
  	 * @param User $user
  	 * @return array
  	 */
  	function getProjects($user = null) {
  		$projects = array();
  		$groups = array();
  		if (is_a($user, 'User')) {
  			$matches = Projects::findByUser($user, PROJECT_STATUS_ACTIVE, true);
  			if (is_foreachable($matches)) {
				foreach ($matches as $project) {
					$info['label'] = $project->getName();
					$info['data'] = $project->getId();
					$group = $project->getGroup();
					if ($group != null) {
						$info['group'] = $group->getName();
						$groups[$info['group']][] = $info['data'];
					} else {
						$info['group'] = '';
					}
					$projects[] = $info;
				}
  			}
  		}

  		// Add project groups at the top
  		ksort($groups);
  		$groups_data = array();
  		$groups_data[] = array('label'=> lang('All Projects'), 'data' => '', 'group' => '');
  		if (is_foreachable($groups)) {
  			foreach ($groups as $name=>$ids) {
  				$info['label'] = lang('Group: ').$name;
  				$info['data'] = implode(',', $ids);
  				$info['group'] = '';
  				$groups_data[] = $info;
  			}
  		}
  		$projects = array_merge($groups_data, $projects);
  		return $projects;
  	}

  	/**
  	 * Get localized labels for UI
  	 *
  	 * @return array
  	 */
  	function getLanguage() {
  		$labels = array();

  		// Hack for date format display in charts
		$item['key'] = '__DATEFORMAT__';
		$item['label'] = 'MM/DD'; // Options: "MM/DD" and "DD/MM", default is "MM/DD"

  		// First get the dictionary
  		$dict = Languages::getDictionary(REPORTS_MODULE);

		// Now get translation for each dictionary item and pass on
		if (is_foreachable($dict)) {
			foreach ($dict as $key) {
				$item['label'] = lang($key);
				$item['key'] = $key;
				$labels[] = $item;
			}
		}
  		return $labels;
  	}


  	/**
  	 * Add url key to the array based on object's type
  	 *
  	 * @param array $data
  	 */
  	function addObjectURL(&$data)
  	{
  		// Add object URL
		if (is_foreachable($data))
		{
			foreach ($data as $key=>$item)
			{
				$url = '';
				switch ($item['type'])
				{
					case 'Ticket':
						$url = assemble_url('project_ticket', array('project_id' => $item['project_id'], 'ticket_id' => $item['integer_field_1']));
						break;
					case 'Checklist':
						$url = assemble_url('project_checklist', array('project_id' => $item['project_id'], 'checklist_id' => $item['id']));
						break;
					case 'Page':
						$url = assemble_url('project_page', array('project_id' => $item['project_id'], 'page_id' => $item['id']));
						break;
					case 'Discussion':
						$url = assemble_url('project_discussion', array('project_id' => $item['project_id'], 'discussion_id' => $item['id']));
						break;
					case 'File':
						$url = assemble_url('project_file', array('project_id' => $item['project_id'], 'file_id' => $item['id']));
						break;
				}
				$item['url'] = $url;
				$data[$key] = $item;
			}
		}
  	}

  	/**
  	 * Get chart data in array
  	 *
  	 * @param string $projects
  	 * @param array $options
  	 * @param array $charts
  	 * @return array
  	 */
	function getChartData($projects = '', $options = array(), $charts = null) {

		$chart_type = '';
		$params = array();

		$iteration_days = ConfigOptions::getValue("reports_iteration_days");
		// If start / end date are not specified, use last 3 months period
		$start = DateValue::makeFromString( array_var($options, 'start_date', '-3 months') );
		$end = DateValue::makeFromString( array_var($options, 'end_date', 'now') );
		$params['start'] = $start->toMySQL();
		$params['end'] = $end->toMySQL();
		$before = $start->advance($iteration_days * -86400, false);
		$params['before_start'] = $before->toMySQL();

		// Collect projects in one string
		if (strlen($projects) > 0) {
			$params['projects'] = $projects;
		}

		// By default, show all charts
		if (!is_foreachable($charts) || count($charts) == 0) {
			$charts = array('primary', 'secondary');
		}

		/************** Now get data for charts ******************/
		$master_categories = ConfigOptions::getValue("reports_master_categories");
		$master_categories_count = count($master_categories);

		$result = array();
		$result['params'] = $params;
		$params['end'] .= ' 23:59:59';

		/**
		 * Primary Charts
		 */
		$chart_type = 'primary';
		if (in_array($chart_type, $charts)) {

			// Fields to sum
			$sum_fields = array('total', 'open', 'closed',
			'estimated_hours', 'actual_hours',
			'others_open', 'others_closed');

			// Append master category count fields
			for($i = 0; $i < $master_categories_count; $i++) {
				$sum_fields[] = 'cat'.$i.'_open';
				$sum_fields[] = 'cat'.$i.'_closed';
			}

			// Data for these fields should not be subtraced from last iteration's data
			$no_subtraction_fields = array('date', 'iteration',
			'total', 'open', 'closed');

			// Subtract current value of these fields from their last iteration value to get iteration value
			$subtraction_fields = array_diff($sum_fields, $no_subtraction_fields);

			$query = 'SELECT date, iteration';
			foreach ($sum_fields as $field) {
				$query .= ", SUM($field) AS $field ";
			}
			$query .= 'FROM `'.TABLE_PREFIX.'rep_tickets_snapshot`
					   WHERE date between ? and ?';
			if (isset($params['projects'])) {
				$query .= ' AND project_id in ('.$params['projects'].') ';
			}
			$query .= ' GROUP BY date ORDER BY date ASC';

			$data = db_execute_all($query, $params['before_start'], $params['end']);

			// Process this data - subtract last iterations counts from this
			// so that we can get counts specific to this iteration
			$new_data = array();
			if (count($data) > 0) {
				$index = 0;

				// If we do not have any iterations before the start date (project started
				// in between the given period), we may use a dummy iteration as last iteration
				$last_iteration = $data[$index];
				if ($last_iteration['date'] >= $params['start']) {
					$index = 0;
					foreach($last_iteration as $key=>$value) {
						$last_iteration[$key] = 0;
					}
				} else {
					// We don't store first row in final result - since it's one week
					// before starting date. But we store its counts for subtraction later
					$index++;
				}
				// Loop and store the data after deductions
				for($i = $index; $i < count($data); $i++) {
					$temp_row = $data[$i];
					// Deduct last iteration's counts from this one
					foreach($temp_row as $key=>$value) {
						if (in_array($key, $subtraction_fields)) {
							$temp_row[$key] -= $last_iteration[$key];
						}
					}
					$new_data[] = $temp_row;
					$last_iteration = $data[$i];
				}
			}
			$result[$chart_type]['iterations'] = $new_data;
			// Include category names
			foreach($master_categories as $i=>$category) {
				$result[$chart_type]['labels']['categories']['items'][] = array('data' => $i, 'label' => clean($category));
			}
		}

		/**
		 * Secondary Charts
		 */
		$chart_type = 'secondary';
		if (in_array($chart_type, $charts)) {
			/**
			 * Most Active Tickets / Discussions / Files
			 * activity score = 3 * number of comments + revision
			 */
			$query = 'SELECT (IFNULL( count( tcc.id ) , 0 ) *3) + po.version AS score,
					  po.name, po.type, po.id AS id, po.project_id, po.integer_field_1
					  FROM '.TABLE_PREFIX.'project_objects po
					  LEFT JOIN '.TABLE_PREFIX.'project_objects tcc
					  ON po.id = tcc.parent_id AND tcc.type = "Comment"
					  	AND tcc.parent_type in ("Ticket", "Page")
					  WHERE (( (po.type IN ("Ticket", "Checklist") and po.completed_on IS NULL) or (po.type = "Page" and po.boolean_field_1 IS NULL) )
					  OR po.type IN ("Discussion", "File")) ';
			if ($params['projects'] != '') {
				$query .= ' AND po.project_id in ('.$params['projects'].') ';
			}
			$query .= ' AND (po.created_on BETWEEN ? AND ? OR po.updated_on BETWEEN ? AND ?)';
			$query .= ' GROUP BY po.id
						ORDER by score desc LIMIT 0,5';
			$data = db_execute_all($query, $params['start'], $params['end'], $params['start'], $params['end']);
			$this->addObjectURL($data);
			$result[$chart_type]['active'] = $data;

			/**
			 * Longest Open Tickets
			 */
			$query = 'SELECT po.name as name, po.id as id, project_id,
					  po.type, po.integer_field_1,
					  (TO_DAYS(NOW()) - TO_DAYS(created_on)) as days
					  FROM '.TABLE_PREFIX.'project_objects po
					  WHERE (( (po.type IN ("Ticket", "Checklist") and po.completed_on IS NULL) or (po.type = "Page" and po.boolean_field_1 IS NULL) )
					  OR po.type IN ("Discussion", "File"))';
			if ($params['projects'] != '') {
				$query .= ' AND project_id in ('.$params['projects'].') ';
			}
			$query .= ' AND (created_on BETWEEN ? AND ? OR updated_on BETWEEN ? AND ?)';
			$query .= ' ORDER by created_on ASC LIMIT 0,5';
			$data = db_execute_all($query, $params['start'], $params['end'], $params['start'], $params['end']);
			$this->addObjectURL($data);
			$result[$chart_type]['longest'] = $data;
		} // secondary

		return $result;
	} // getChartData

	/**
	 * Take snapshot of an iteration - tickets open, closed etc
	 *
	 * @param DBConnection $connection
	 * @param array $params
	 * @param int $iteration_days
	 * @return int
	 */
	function takeIterationSnapshot(&$connection, &$master_categories_map, &$params = array(), $iteration_days = 7) {

		if (!is_a($connection, 'DBConnection') ) {
			return 0;
		}

		if ($params['start'] == '' || $params['end'] == '') {
			return 0;
		}

		if (intval($iteration_days) == 0 ) {
			$iteration_days = 7;
		}
		// Get active projects - discard projects with future starts_on dates
		// Include projects which were completed in last iteration as well!
		// This iteration # works because we are always running it on start of week
		$query = "SELECT id, CEIL((TO_DAYS(?) - TO_DAYS(starts_on))/".$iteration_days.") as iteration
				  FROM ".TABLE_PREFIX."projects
				  WHERE type = 'normal' ";
		if ($params['historical'] != 1) {
			$query .= " AND (status = '".PROJECT_STATUS_ACTIVE."' OR completed_on BETWEEN '".$params['start']."' AND '".$params['end']."') ";
		}
		$query .= " AND ? >= starts_on
				  AND starts_on IS NOT NULL";

		$result = $connection->execute($query, array($params['end'], $params['end']));
		if(count($result) > 0)
		{
			foreach ($result as $item)
			{
				if ($item['iteration'] > 0)
				$final[$item['id']]['iteration'] = $item['iteration'];
			}
			$projects_str = implode(', ', array_keys($final));
			if ($projects_str == '')
			{
				return 0;
			}

			// Get ticket stats for these projects - only those created before the given end date
			$query = "SELECT count(po.id) as count, po.project_id as project_id, ";
			if (module_loaded('planning')) {
				$query .= "IFNULL(sum(po.estimate),0) as estimate, ";
			} else {
				$query .= "0 as estimate, ";
			}
			$query .= "CASE WHEN tc.name IS NULL THEN 'Others' ELSE tc.name END as category,
					  CASE WHEN
					  	((po.type = 'Ticket' and po.completed_on IS NULL) or (po.type = 'Page' and po.boolean_field_1 IS NULL))
					  	THEN 0
					  	ELSE 1
					  	END as completed
						FROM `".TABLE_PREFIX."project_objects` po
						LEFT JOIN `".TABLE_PREFIX."project_objects` tc
						ON tc.id = po.parent_id AND tc.type = 'Category' and (tc.module = 'tickets' or tc.module = 'pages')
						where ((po.type = 'Ticket' and po.module = 'tickets') or (po.type='Page' and po.module='pages')) and po.state >= 1
						AND (po.created_on <= ?)
						AND po.project_id IN (".$projects_str.")
						group by category, po.project_id, completed
						order by po.project_id, category, completed";
			$result = $connection->execute($query, array($params['end']));

			$master_categories_count = count($master_categories_map);

			if(count($result) > 0)
			{
				foreach ($result as $item)
				{
					$final[$item['project_id']]['total'] = $item['count'] + $final[$item['project_id']]['total'];
					$final[$item['project_id']]['estimated_hours'] = $item['estimate'] + $final[$item['project_id']]['estimated_hours'];

					$key_part = $master_categories_map[$item['category']];
					// All categories we don't want to explicitly count, go in "others"
					if ($key_part == '') {
						$key_part = 'others';
					}
					if ($item['completed'] > 0) {
						$final[$item['project_id']]['closed'] = $item['count'] + $final[$item['project_id']]['closed'];
						$final[$item['project_id']][$key_part.'_closed'] = $item['count'] + $final[$item['project_id']][$key_part.'_closed'];
					} else {
						$final[$item['project_id']]['open'] = $item['count'] + $final[$item['project_id']]['open'];
						$final[$item['project_id']][$key_part.'_open'] = $item['count'] + $final[$item['project_id']][$key_part.'_open'];
					}
				} // foreach
			} // if
			unset($result);

			// TODO: Get actual and estimated time for each iteration separately
			// We have no way to do that right now - will need to assign tickets / tasks
			// to iterations and get their estimates / actuals. Also need to handle things
			// that span across multiple iterations.
			// This will need hacks to internals of Tickets module

			// Get actual time spent on these projects from start till now
			$query = "SELECT project_id, IFNULL(SUM(float_field_1),0) AS 'actual_hours'
			FROM " . TABLE_PREFIX . "project_objects
			WHERE project_id IN ($projects_str) AND state >= 1
			AND created_on <= ? AND type = 'TimeRecord'
			GROUP BY project_id ASC";
			$result = $connection->execute($query, array($params['end']));
			if(count($result) > 0)
			{
				foreach ($result as $item)
				{
					$final[$item['project_id']]['actual_hours'] = $item['actual_hours'];
				}
			} // if

			// Now insert these values in the table
			$fields = array('date', 'project_id', 'iteration',
			'total',  'open', 'closed',
			'estimated_hours', 'actual_hours',
			'others_open', 'others_closed');
			// Append master category count fields
			for($i = 0; $i < $master_categories_count; $i++) {
				$fields[] = 'cat'.$i.'_open';
				$fields[] = 'cat'.$i.'_closed';
			}

			$query = 'REPLACE INTO `'.TABLE_PREFIX.'rep_tickets_snapshot` ('.implode(', ', $fields).") VALUES \r\n";
			$rows = array();
			foreach($final as $project_id=>$data) {
				$values = array();
				$data['date'] = $params['start'];
				$data['project_id'] = $project_id;
				foreach($fields as $field) {
					if ($data[$field] == '') { $data[$field] = 0; }
					$values[] = $connection->escapeString($data[$field]);
				}
				$rows[] = ' ('.implode(', ', $values). ')';
			}
			$query .= implode(",\r\n", $rows);
			$result = $connection->execute($query);
			unset($rows);
			unset($fields);

			return $connection->affectedRows();
		}
		return 0;
	}

	/**
	 * Get iteration start and end dates from given date
	 *
	 * @param DateValue $today
	 * @return array
	 */
	function getIterationDates(DateValue &$today = null, $iteration_days = 7, $frequency = 'D')
	{
		// Set start, end to be last week start and end dates
		// now will be set to this week's first day
		if (!is_a($today, 'DateValue') || $today == null)
		{
			$today = DateValue::makeFromString('now');
		}
		// Go to the beginning of week based on user settings
		$today_wday = $today->getWeekday();
		$week_start = ConfigOptions::getValue("time_first_week_day");

		$adjust_days = 0;
		if ($today_wday < $week_start) {
			$adjust_days = -1 * (7 - ($week_start - $today_wday));
		} else if ($today_wday > $week_start) {
			$adjust_days = -1 * ($today_wday - $week_start);
		}
		//echo "Today: $today_wday, Week Start: $week_start, Adjustment is $adjust_days. Today: ".$today->toMySQL();
		if ($adjust_days != 0) {
			$today->advance($adjust_days * 86400);
		}

		switch ($frequency)
		{
			case 'W':
				$iteration_end = $today->advance(-86400, false);
		        $iteration_start = $iteration_end->advance(($iteration_days-1)*-86400, false);
				break;
			case 'D':
			default:
				$iteration_start = $today;
				$iteration_end = $iteration_start->advance(($iteration_days-1)*86400, false);
				break;
		}
		//echo "Returning: ".$iteration_start->toMySQL()." - ".$iteration_end->toMySQL();
        return array('start' => $iteration_start, 'end' => $iteration_end );
	}

	/**
	 * Determine iteration period and take snapshot for it.
	 * If no snapshots present, take snapshots from the earliest project.
	 *
	 */
	function dailyHandler() {
		$connection =& DBConnection::instance();
		$frequency = ConfigOptions::getValue("reports_update_frequency");
		$iteration_days = ConfigOptions::getValue("reports_iteration_days");
		$today = DateValue::makeFromString('now');
		$dates = Reports::getIterationDates($today, $iteration_days, $frequency);
		$iteration_start = $dates['start'];
		$iteration_end = $dates['end'];
        $params['start'] = $iteration_start->toMySQL();
		$params['end'] = $iteration_end->toMySQL();

		// If a project's start date is greater than some of its objects,
		// set the start date to earliest project object
		$query = 'CREATE temporary table '.TABLE_PREFIX.'earliest_object
					AS
					SELECT po.project_id, po.created_on
					FROM '.TABLE_PREFIX.'project_objects po
					GROUP BY po.project_id
					ORDER BY po.created_on ASC';
		$result = $connection->execute($query);
		$query = 'UPDATE '.TABLE_PREFIX.'projects p, '.TABLE_PREFIX.'earliest_object eo
					SET p.starts_on = eo.created_on
					WHERE p.starts_on > eo.created_on';
		$result = $connection->execute($query);
		$query = 'DROP table '.TABLE_PREFIX.'earliest_object';
		$result = $connection->execute($query);

		// Set start date for projects if it does not exist
		$query = 'UPDATE '.TABLE_PREFIX.'projects
				  SET starts_on = date(created_on)
				  WHERE starts_on IS NULL';
		$result = $connection->execute($query);

		$master_categories = ConfigOptions::getValue("reports_master_categories");
		$master_categories_count = count($master_categories);
		$master_categories_map = array();
		for($i = 0; $i < $master_categories_count; $i++) {
			$master_categories_map[$master_categories[$i]] = 'cat'.$i;
		}

		// If table is empty, populate it from the beginning
		$query = 'SELECT count(*) as count FROM '.TABLE_PREFIX.'rep_tickets_snapshot';
		$result = $connection->execute_one($query);
		if($result['count'] <= 0)
		{
			$query = 'SELECT starts_on FROM '.TABLE_PREFIX.'projects WHERE starts_on IS NOT NULL ORDER BY starts_on ASC LIMIT 0,1';
			$result = $connection->execute_one($query);
			if (is_foreachable($result))
			{
				$beginning = DateValue::makeFromString($result['starts_on']);

				// Adjust beginning date if we don't have enough RAM
				$availableMemory = ini_get('memory_limit');
				$val = trim($availableMemory);
    			$last = strtolower($val[strlen($val)-1]);
    			switch($last)
    			{
			        case 'g':
			            $val *= 1024;
			        case 'm':
			            $val *= 1024;
			        case 'k':
			            $val *= 1024;
    			}
    			// Convert back to MB
    			$availableMemory = round($val / 1024 / 1024);
    			if ($availableMemory < 128)
    			{
					$weeksToProcess = round($availableMemory/4);
					$beginning = DateValue::makeFromString("-$weeksToProcess weeks");
    			}

				// Adjust iteration start to week start from beginning date
				$dates = Reports::getIterationDates($beginning, $iteration_days, $frequency);
				$iteration_start = $dates['start'];
				$iteration_end = $dates['end'];

				while($iteration_start->toMySQL() < $params['start']) {
					$iparams['historical'] = 1;
					$iparams['start'] = $iteration_start->toMySQL();
					$iteration_start->advance(($iteration_days * 86400));
					$iparams['end'] = $iteration_start->toMySQL();
					$entries = Reports::takeIterationSnapshot($connection, $master_categories_map, $iparams, $iteration_days);
					//echo "Populating - ".$iparams['start'].' - '.$iparams['end']." - $entries entries processed.<br />";
					$iteration_start->advance(1);
					unset($connection);
					$connection = DBConnection::instance();
				}
			}
		}
		$entries = Reports::takeIterationSnapshot($connection, $master_categories_map, $params, $iteration_days);
		//echo "Reporting snapshots taken - ".$params['start'].' - '.$params['end'].' - '.$entries.' entries processed. ';
		return;
	}

  } // Reports

?>
