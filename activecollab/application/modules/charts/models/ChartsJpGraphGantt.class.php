<?php

class ChartsJpGraphGantt {
	private $use_ttf_fonts = false;
	
	/**
   * Constructor
   *
   * @param Request $request
   * @return FilesController
   */
  function __construct($request) {
  	#parent::__construct($request);
  	
  	// Find out if we should use the fonts
  	if (file_exists(CHARTS_TTF_DIR))  $this->use_ttf_fonts = true;
	}
	
	/**
   * Show index page
   *
   * @param void
   * @return null
   */
  function make_gantt(&$charts_data,$project,$set_date_extents) {
  	// Limit string length on bar title
  	$lengthlimit = 45;
		$graphwidth = 900;
		
		// Create a default chart
		require_once(CHARTS_MODULE_PATH . "/helpers/jpgraph/jpgraph.php");
		require_once(CHARTS_MODULE_PATH . "/helpers/jpgraph/jpgraph_gantt.php");
		
		// New auto-height Gantt, to fit within aC
		$graph = new GanttGraph($graphwidth);
		
		// Get the date range from user input
		$graph->SetDateRange($charts_data['start_on'],$charts_data['end_on']);
		$graph->SetFrame(true,'#cccccc',1);
		
		// Scale months and years
		$graph->scale->month->SetStyle(MONTHSTYLE_SHORTNAMEYEAR4);
		$graph->scale->month->SetFontColor("#555555");
		$graph->scale->month->SetBackgroundColor("#d6d3a4");
		// Setup a horizontal grid
		
		if ($charts_data['showhgrid']) {
			$graph->hgrid->Show();
			$graph->hgrid->SetRowFillColor('#000000@0.95');
		}
		
		// Some styling
		// $graph->SetShadow();
		$graph->SetMarginColor('#fbfbfb');
		$graph->SetBox(true, "#555555",1);
		$graph->SetBackgroundGradient('#fcfcfc','#e0e0e0',GRAD_HOR,BGRAD_MARGIN);
		$graph->SetMargin(20,20,20,27);
		
		// Set titles and some fonts to make it prettier
		$graph->title->Set($project->active_project->getName());
		if ($this->use_ttf_fonts) $graph->title->SetFont(FF_VERDANA,FS_BOLD,12);
		$graph->subtitle->Set("Vision general del proyecto");
		if ($this->use_ttf_fonts) $graph->subtitle->SetFont(FF_VERDANA,FS_NORMAL,10);
		
		$graph->ShowHeaders(GANTT_HDAY | GANTT_HWEEK | GANTT_HMONTH);
		//$graph->scale->week->SetStyle(WEEKSTYLE_FIRSTDAY);
		
		// Add line for today
		// Setup a vertical marker line
		if ($charts_data['showtoday']) {
			$vline = new GanttVLine(strftime('%Y-%m-%d', time()));
			$vline->SetDayOffset(0.5);
			$vline->title->Set("Today");
			if ($this->use_ttf_fonts)  $vline->title->SetFont(FF_FONT1,FS_BOLD,10);
			$graph->Add($vline);
		}
		
		// Get Milestones from project, if enabled!
		$milestones = Milestones::findByProject($project->active_project, $project->logged_user);
		if (count($milestones) > 0) {
			// JpGraph is ready, now lets cycle through milestones, finding tasks
			$date_lo = 99999999;
			$date_hi = 00000000;
			$bar = -1;
			
			foreach ($milestones as $milestone) {
				$ms_task_count = 0;
				$ms_complete_task_count = 0;
				
				// Add milestone to activities
				$name = $milestone->getName();
				$startdate = substr($milestone->getStartOn(), 0, 10);
				$enddate = substr($milestone->getDueOn(), 0, 10);
				
				if ($date_lo > preg_replace("/[^0-9]/", "", $startdate)) {
					$date_lo = $startdate;
				}
				
				if ($date_hi < preg_replace("/[^0-9]/", "", $enddate)) {
					$date_hi=$enddate;
				}
				
				$activity = new GanttBar(++$bar,$this->short_name($name, $lengthlimit),$startdate,$enddate,'',0.50);
				$activity->leftMark->SetType( MARK_LEFTTRIANGLE );
				$activity->leftMark->Show();
				$activity->rightMark->SetType( MARK_RIGHTTRIANGLE );
				$activity->rightMark->Show();
				
				if ($this->use_ttf_fonts) $activity->title->SetFont(FF_ARIAL,FS_BOLD,9);
				
				$activity->SetFillColor('darkgreen');
				$activity->SetPattern(BAND_LDIAG,'green');
				$ms_url = assemble_url("project_milestone", array('project_id' => $project->active_project->getId(), 'milestone_id' => $milestone->getId()));
				$this->add_csim_target('milestone', $name, $activity, $ms_url);
				$graph->Add($activity);
				
				// Grab objects from Milestone
				$objects = $milestone->getObjects($project->logged_user);
				
				// Cycle through tickets
				$tickets = $objects['Tickets'];
				
				foreach ($tickets as $ticket) {
					$ms_task_count += $ticket->countTasks();
					print_r($ticket);
					$ms_complete_task_count += $ticket->countCompletedTasks();
					
					$name = $ticket->getName();
					$count = $ticket->countTasks();
					$start = '';
					
					# $ticket->getStartOn() is *not* a standard feature of
					# ActiveCollab, but it does get added by the Planning
					# module, and we support it if it exits.
					# http://appsmagnet.com/activecollab-main/planning-module/
					if (method_exists($ticket,'getStartOn')) {
						$start = substr($ticket->getStartOn(), 0, 10);
					}
					$due = substr($ticket->getDueOn(),0,10);
					
					$status = "Due $due";
					if ($ticket->isLate())  $status = 'Late';
					if ($ticket->isCompleted())  $status = 'Completed';
					if ($ticket->isToday()) $status = 'Due today';
					
					# If the ticket has a StartOn and DueOn then plot it
					# with a GanttBar, else use a JpMileStone.
					if ($charts_data['showtickets']) {
						if ($start != '' && $due != '') {
							$ms = new GanttBar(++$bar,$this->short_name(" $name ($count) - $status", $lengthlimit),$start,$due,'',0.35);
							$ms->SetFillColor('green');
							$ms->SetPattern(BAND_RDIAG,'darkgreen');
						} else {
							if ($due == '') { // If we have no due date, hide it
								$due = strftime('%Y-%m-%d', time()); // Today
								$status = 'No Due Date';
							}
							
							$ms = new JpMileStone(++$bar, $this->short_name(" $name ($count) - $status", $lengthlimit),$due,$status);
							if ($due == '') $ms->mark->Hide();  // If we have no due date, hide it
						}
						
						if ($this->use_ttf_fonts) $ms->title->SetFont(FF_ARIAL,FS_NORMAL,9);
						
						$ms_url = assemble_url('project_ticket', array('project_id' => $project->active_project->getId(), 'ticket_id' => $ticket->getTicketId()));
						$this->add_csim_target('ticket', $name, $ms, $ms_url);
						$ms->title->SetColor('darkgreen');
						$graph->Add($ms);
						
						if ($charts_data['showtasks']) {
							$tasks = Tasks::findByObject($ticket);
							$this->add_tasks_to_gantt($graph,$project,$tasks,$bar,$lengthlimit);
						} // if
					} // if
				} // foreach
				
				// ... and cycle through checklists
				$checklists = $objects['Checklists'];
				print_r($ms_task_count);
				foreach ($checklists as $checklist) {
					$ms_task_count += $checklist->countTasks();
					$ms_complete_task_count += $checklist->countCompletedTasks();
					
					$name = $checklist->getName();
					$count = $checklist->countTasks();
					$status = 'Incomplete';
					
					if ($checklist->isCompleted()) {
						$status = 'Completed';
					}
					
					# Checklists don't have due dates and so to show them
					# we put them in as a JpMileStone on today, with no
					# caption and hide their mark.
					if ($charts_data['showchecklists']) {
						$today = strftime('%Y-%m-%d', time());
						
						$ms = new JpMileStone(++$bar, $this->short_name(" $name ($count) - $status", $lengthlimit), $today, '');
						if ($this->use_ttf_fonts) $ms->title->SetFont(FF_ARIAL,FS_NORMAL,9);
						
						$ms_url = assemble_url('project_checklist', array('project_id' => $project->active_project->getId(), 'checklist_id' => $checklist->getId()));
						$this->add_csim_target('checklist item', $name, $ms, $ms_url);
						$ms->title->SetColor('blue');
						$ms->mark->Hide();
						$graph->Add($ms);
						
						if ($charts_data['showtasks']) {
							$tasks = Tasks::findByObject($checklist);
							$this->add_tasks_to_gantt($graph,$project,$tasks,$bar,$lengthlimit);
						} // if
					} // if
				} // foreach
				
				echo $ms_task_count;
				exit;
				
				# Calculate the % complete and add that to the $activity
				$ms_progress = ($ms_task_count) ? $ms_complete_task_count / $ms_task_count : 0;
				$activity->progress->Set($ms_progress);
				$activity->progress->SetFillColor('green');
				$activity->progress->SetPattern( BAND_SOLID , "black" );
				$activity->caption->Set(sprintf("%0.1f%%",$ms_progress * 100));
				
				# $activity->caption->SetBox('yellow');
				if ($this->use_ttf_fonts) $activity->caption->SetFont(FF_ARIAL,FS_BOLD,9);
				
				# We're finished with this activity
				unset($activity);
			} // Milestones foreach
			
			// If the user dind't provide a date range, set it per the data
			if ($set_date_extents) {
				$charts_data['start_on']  = str_replace('-','/', $date_lo);
				$charts_data['end_on']    = str_replace('-','/', $date_hi);
				$graph->SetDateRange($date_lo,$date_hi);
			}
		} // if
		
		# Place a legend
		$legends = array(
			array(
				'text' => 'Milestones',
				'color' => 'black',
				'x' => 23,
				'y' => 55
			),
			array(
				'text' => 'Tickets',
				'color' => 'darkgreen',
				'x' => 27,
				'y' => 69
			),
			array(
				'text' => '/',
				'color' => 'black',
				'x' => 72,
				'y' => 69
			),
			array(
				'text' => 'Checklists',
				'color' => 'blue',
				'x' => 76,
				'y' => 69
			),
			array(
				'text' => 'Tasks',
				'color' => 'darkred',
				'x' => 31,
				'y' => 83
			)
		);
		
		foreach ($legends as $d) {
			$txt = new Text();
			$txt->SetPos($d['x'],$d[y]);
			$txt->Set($d['text']);
			
			if ($this->use_ttf_fonts) $txt->SetFont(FF_ARIAL,FS_BOLD,10);
			$txt->SetColor($d['color']);
			$graph->Add($txt); # -- LHH-TODO - need version 2.5+, we have 2.3
		}
		
		// Save it to cache dir
		$filename = 'ac_charts_' . $project->logged_user->getId() . '_' . substr(md5($project->active_project->getName()),0,8) . '.png';
		$filefs = CHARTS_OUTPUT_IMG_DIR . "/$filename";
		$filerelative = CHARTS_OUTPUT_IMG_URL . "/$filename";
		$map_name = preg_replace( "/[^a-zA-Z0-9]/", '_', $filename);
		
		$graph->Stroke($filefs);
		
		// Grab the image map and render the Charts tab page
		$csim_map = $graph->GetHTMLImageMap($map_name);
		return array(
			'filefs' => $filefs,
			'fileurl' => $filerelative,
			'maphtml' => $csim_map,
			'mapname' => $map_name,
		);
	} // make_gantt
	
	function short_name($str, $limit) {
		return strlen($str) > $limit ? substr($str, 0, $limit - 3) . '...' : $str;
	} // short_name
	
	function add_tasks_to_gantt($graph,$project,$tasks,&$bar,$lengthlimit) {
		foreach ($tasks as $task) {
			$name = $task->getName();
			$due = substr($task->getDueOn(), 0, 10);
			$status = "Due $due";
			if ($task->isLate())  $status = "Late";
			if ($task->isToday()) $status = "Due today";
			if ($task->isCompleted()) {
				$due = substr($task->getCompletedOn(),0,10);
				$status = "Completed";
			}
			unset($assigned);
			
			$assigned = array();
			$assignees = $task->getAssignees();
			if ($assignees) {
				foreach ($assignees as $assignee) {
					$assname = $assignee->getName();
					$assname = explode(' ',$assname);
					$assigned[] = $assname[0];
				}
			} // if
			
			if (count($assigned)>0)	$assignedformated = '('. implode(', ', $assigned) .')';
			
			$ms = new JpMileStone(++$bar, $this->short_name("  $name $assignedformated", $lengthlimit), $due, $status);
			if ($this->use_ttf_fonts) $ms->title->SetFont(FF_ARIAL,FS_NORMAL,9);
			
			$ms_url=assemble_url('project_task', array('project_id' => $project->active_project->getId(), 'task_id' => $task->getId()));
			$this->add_csim_target('task',$name,$ms,$ms_url);
			$graph->Add($ms);
		} // foreach
	}

function add_csim_target($type,$name,$gannt_obj,$url) {
	$csim_alt_tag=preg_replace('/"/',"'","View $type \"$name\"");
	$gannt_obj->title->SetCSIMTarget($url,$csim_alt_tag);
}

  } // ChartsController

?>
