<?php

  // We need project controller
  use_controller('project', SYSTEM_MODULE);
  
  include_once(CHARTS_MODULE_PATH . '/models/ChartsJpGraphGantt.class.php');

  /**
   * Files controller
   *
   * @package activeCollab.modules.files
   * @subpackage controllers
   */
  class ChartsController extends ProjectController {
  
    /**
     * Active module
     *
     * @var string
     */
    var $active_module = CHARTS_MODULE;
    
    /**
     * Selected checklist
     *
     * @var File
     */
    var $active_file;
    
    /**
     * Enable categories support for this controller
     *
     * @var boolean
     */
    var $enable_categories = false;
    
    /**
     * Actions available through API
     *
     * @var array
     */
    var $api_actions = array('index');

    var $index_output_format = 'html';
    var $mpx_format = 'mpx';
    var $mpx_task_id = 0;
    var $mpx_date_lo=99999999;
    var $mpx_date_hi=00000000;
    var $wbs = array();

    /**
     * Constructor
     *
     * @param Request $request
     * @return FilesController
     */
    function __construct($request) {
      parent::__construct($request);

      $this->wireframe->addBreadCrumb(lang('Charts'), '');

      # Add "Download PDF" as a top-level page action button
      if (CHARTS_MODULE_HAVE_FPDF == true) {
        $pdf_url = assemble_url("charts_dload_pdf",
			array('project_id' => $this->active_project->getId()));
        $this->wireframe->addPageAction(lang('Download PDF'), $pdf_url);
      }
      # Add MPX and XML download options as children of an "Export" menu
      $mpx_opts=new NamedList();
      $mpxml_url = assemble_url("charts_dload_mpxml",
			array('project_id' => $this->active_project->getId()));
      $mpx_opts->add('charts_dload_mpxml', array(
            'text' => lang('MS Projects XML'),
            'url'  => $mpxml_url,
          ));
      $mpx_url = assemble_url("charts_dload_mpx",
			array('project_id' => $this->active_project->getId()));
      $mpx_opts->add('charts_dload_mpx', array(
            'text' => lang('MS Projects MPX'),
            'url'  => $mpx_url,
          ));
      $this->wireframe->addPageAction(lang('Export as...'), '#',
		$mpx_opts->data, array('id' => 'charts_options'), 1000);
      
      $this->smarty->assign(array(
        'active_user'  => $this->active_user,
        'logged_user'  => $this->logged_user,
        'active_file'  => $this->active_file,
        'project_tab'  => 'charts',
      ));
    } // __construct
    
    /**
     * Show index page
     *
     * @param void
     * @return null
     */
    function index() {

	$charts_data = $this->request->post('charts');

        $default_settings=0;
	// If no data, here are the defaults
	if (!$this->request->post('charts')) {
            $default_settings=1;
	    // Calculate start and end date
            $charts_data['start_on']  = str_replace('-','/', substr(DateTimeValue::beginningOfMonth(strftime('%m', time()), strftime('%Y', time())), 0, 10));
	    $charts_data['end_on']    = str_replace('-','/', substr(DateTimeValue::endOfMonth(strftime('%m', time()), strftime('%Y', time())), 0, 10));
	    $charts_data['showtickets'] = true;
	    $charts_data['showchecklists'] = true;
	    $charts_data['showtasks'] = true;
	    $charts_data['showhgrid'] = true;
	    $charts_data['showtoday'] = true;
	}

        $gantt = new ChartsJpGraphGantt();
        $results = $gantt->make_gantt($charts_data,$this,$default_settings);

        // If dload_pdf() called us to ask for just the image, return it now
        if ($this->index_output_format == 'pdf') {
          return $results['filefs'];
        }

        $this->smarty->assign(array(
          'categories' => Categories::findByModuleSection($this->active_project, CHARTS_MODULE, 'charts'),
	  'charts_data' => $charts_data,
	  'filename' => $results['fileurl'],
	  'page_tab' => 'charts',
	  'maphtml' => $results['maphtml'],
	  'mapname' => $results['mapname'],
        ));
    } // index


    /**
     * Allow the user to download a PDF file holding a gannt chart
     *
     * @param void
     * @return null
     */
    function dload_pdf() {
      // We should never get into here if we don't have access to the
      // FPDF library, but just in case we do, run the index() method.
      if (CHARTS_MODULE_HAVE_FPDF != true) {
        return $this->index();
      }

      // Tell the index() function that we want to deliver pdf and then
      // call it to get the path to the PNG file of the gantt chart.
      $this->index_output_format='pdf';
      $png_file=$this->index();
      // We want our PDF in the same place as our PNG
      $pdf_file=preg_replace("/\.png$/",".pdf",$png_file);

      // Get the size of the PNG and figure out a page size
      list($width, $height, $type, $attr) = getimagesize($png_file);
      $page_width=8.5; # inches
      $needed_inches_tall=$page_width * $height / $width;
      $page_size='Letter';
      if ($needed_inches_tall > 11 and $needed_inches_tall < 14) {
        $page_size='Legal';
      } elseif ($needed_inches_tall > 14) {
        $page_size=array($page_width, $needed_inches_tall);
      }
      // Create a PDF, add a page, put the image into it, and write it out
      $pdf=new FPDF('P','in',$page_size); // Portrait, inches, Letter
      $pdf->SetMargins(0,0,0);
      $pdf->SetAutoPageBreak(false);
      $pdf->AddPage();
      $pdf->Image($png_file,null,null,$page_width);
      $pdf->Output($pdf_file);

      // Send the PDF file and then unlink it.
      ob_clean(); # Clear the output buffer -- something is writing \n there!
      header_remove(); # Remove all of the headers that are already set
      header('Content-Type: application/pdf',1);
      header('Content-Disposition: attachment; filename="gantt.pdf"',1);
      readfile($pdf_file);
      unlink($pdf_file);
      die();
    }

    /**
     * Allow the user to download an MPX file of this project
     *
     * @param void
     * @return null
     */
   function dload_mpx() {

      $this->mpx_format = 'mpx';

      $project=array();
      $project['name'] = $this->active_project->getName();
      $project['client'] = $this->active_project->getCompany()->getName();
      $project['leader'] = $this->active_project->getLeaderName();
      $project['startson'] = $this->active_project->getStartsOn();

      $mpx=array();
      $mpx[]="MPX, ActiveCollab $this->active_module, 4.1";
      $mpx[]="10,$,1,2,\",\",."; # Currency settings
      $mpx[]="11,2,0,2,8,40,$0.00/h,$0.00/h,1,1"; # Default settings
      $mpx[]="12,0,0,480,/,:,AM,PM,9"; # Date/time format
      $mpx[]="20,Standard,1,1,1,1,1,1,1"; # Base calendar
      foreach (range(1,7) as $i) {
        $mpx[]="25,$i,7:00 AM,11:00 AM,12:00 PM,4:00 PM"; # Base calendar hours
      }
      # Project header information
      $mpx[]=$this->mpx_buildline('30',',',array(
		$project['name'],$project['client'],$project['leader'],
		'Standard',$this->mpx_date($project['startson']),'',0));
      # Task table definitions, (60=text / 61=numeric)
      $mpx[]="60,ID,Unique ID,Name,Duration,Start,Finish," .
		"Outline Level,WBS,Hide Bar";
      $mpx[]="61,90,98,1,40,50,51,3,2,123";
      # The project itself
      $mpx[]=$this->mpx_task('mpx',
			$this->active_project->getId(),$project[name],
			$project['startson'],$project['startson'],0,0);
      $this->mpx_add_milestones($mpx);

      ob_clean(); # Clear the output buffer -- something is writing \n there!
      header_remove(); # Remove all of the headers that are already set
      header('Content-Type: application/vnd.ms-project',1);
      header('Content-Disposition: attachment; filename="export.mpx"',1);
      print join("\n", $mpx);
      die();
   }

    /**
     * Allow the user to download an MPX file of this project
     *
     * @param void
     * @return null
     */
   function dload_mpxml() {

      $this->mpx_format = 'mpxml';

      $project=array();
      $project['name'] = $this->active_project->getName();
      $project['client'] = $this->active_project->getCompany()->getName();
      $project['leader'] = $this->active_project->getLeaderName();
      $project['startson'] = $this->active_project->getStartsOn();

      $t = '' .
	'<Name>' .  $project['name'] . '.xml</Name>
	<Title>' .  $project['name'] . '</Title>
	<Company>' . $project['client'] . '</Company>
	<Manager>' . $project['leader'] . '</Manager>
	<CreationDate>' . date('Y-m-d\TH:i:s') . '</CreationDate>
	<LastSaved>' . date('Y-m-d\TH:i:s') . '</LastSaved>
	<ScheduleFromStart>1</ScheduleFromStart>
	<StartDate>' . $this->mpx_date($project['startson']) . '</StartDate>
	<FYStartDate>1</FYStartDate>
	<CriticalSlackLimit>0</CriticalSlackLimit>
	<CurrencyDigits>2</CurrencyDigits>
	<CurrencySymbol>$</CurrencySymbol>
	<CurrencySymbolPosition>0</CurrencySymbolPosition>
	<CalendarUID>1</CalendarUID>	
	<DefaultStartTime>08:00:00</DefaultStartTime>
	<DefaultFinishTime>17:00:00</DefaultFinishTime>
	<MinutesPerDay>480</MinutesPerDay>
	<MinutesPerWeek>2400</MinutesPerWeek>
	<DaysPerMonth>20</DaysPerMonth>
	<DefaultTaskType>0</DefaultTaskType>
	<DefaultFixedCostAccrual>3</DefaultFixedCostAccrual>
	<DefaultStandardRate>0</DefaultStandardRate>
	<DefaultOvertimeRate>0</DefaultOvertimeRate>
	<DurationFormat>7</DurationFormat>
	<WorkFormat>2</WorkFormat>
	<EditableActualCosts>0</EditableActualCosts>
	<HonorConstraints>1</HonorConstraints>
	<InsertedProjectsLikeSummary>0</InsertedProjectsLikeSummary>
	<MultipleCriticalPaths>0</MultipleCriticalPaths>
	<NewTasksEffortDriven>1</NewTasksEffortDriven>
	<NewTasksEstimated>1</NewTasksEstimated>
	<SplitsInProgressTasks>1</SplitsInProgressTasks>
	<SpreadActualCost>0</SpreadActualCost>
	<SpreadPercentComplete>0</SpreadPercentComplete>
	<TaskUpdatesResource>1</TaskUpdatesResource>
	<FiscalYearStart>0</FiscalYearStart>
	<WeekStartDay>0</WeekStartDay>
	<MoveCompletedEndsBack>0</MoveCompletedEndsBack>
	<MoveRemainingStartsBack>0</MoveRemainingStartsBack>
	<MoveRemainingStartsForward>0</MoveRemainingStartsForward>
	<MoveCompletedEndsForward>0</MoveCompletedEndsForward>
	<BaselineForEarnedValue>0</BaselineForEarnedValue>
	<AutoAddNewResourcesAndTasks>1</AutoAddNewResourcesAndTasks>
	<CurrentDate>' . date('Y-m-d\TH:i:s') . '</CurrentDate>
	<MicrosoftProjectServerURL>1</MicrosoftProjectServerURL>
	<Autolink>1</Autolink>
	<NewTaskStartDate>0</NewTaskStartDate>
	<DefaultTaskEVMethod>0</DefaultTaskEVMethod>
	<ProjectExternallyEdited>0</ProjectExternallyEdited>
	<OutlineCodes/>
	<WBSMasks/>
	<ExtendedAttributes/>';
// Calendars 
	$t .= '
	<Calendars>';
	$t .= $this->mpxml_get_calendars();
	$t .= '
	</Calendars>';

// Tasks
      $mpx=array();
      $this->mpx_task_id=2; // Need to start tasks as ID=2
      $mpx[] = ''; // Placeholder for Entire Project
      $this->mpx_add_milestones($mpx);
      $this->mpx_task_id=1; // Need ID=1 for 'Entire Project'
      $mpx[0] = $this->mpx_task(1,'Entire Project',$this->mpx_date_lo,$this->mpx_date_hi,1,0);
      $t .= "\n<Tasks>\n";
      $t .= join("\n", $mpx);
      $t .= "\n</Tasks>\n";
      $t .= '
	<Assignments>
	</Assignments>
	';

      $t = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>' .
	"\n" .
	'<Project xmlns="http://schemas.microsoft.com/project">' .
	"\n" .
	$t .
	"</Project>\n";

      ob_clean(); # Clear the output buffer -- something is writing \n there!
      header_remove(); # Remove all of the headers that are already set
      header('Content-Type: application/vnd.ms-project',1);
      header('Content-Disposition: attachment; filename="export.xml"',1);
      print $t;
      die();
   }

   function mpxml_get_calendars() {
	$output = '
	<Calendar>
		<UID>1</UID>
		<Name>Standard</Name>
		<IsBaseCalendar>1</IsBaseCalendar>
		<WeekDays>';
		
	$working_days = '23456';
	for ($i = 1; $i <= 7; $i++)
	{
		$output .= '
			<WeekDay>
			<DayType>' . $i . '</DayType>';
		if (strstr($working_days, $i.''))
			$output .= '
			<DayWorking>1</DayWorking>
                    <WorkingTimes>
                        <WorkingTime>
                            <FromTime>08:00:00</FromTime>
                            <ToTime>12:00:00</ToTime>
                        </WorkingTime>
                        <WorkingTime>
                            <FromTime>13:00:00</FromTime>
                            <ToTime>17:00:00</ToTime>
                        </WorkingTime>
                    </WorkingTimes>';
		else
			$output .= '
				<DayWorking>0</DayWorking>';

		$output .= '
			</WeekDay>';
	} 
	$output .= '
		</WeekDays>
	</Calendar>';

	$output .= '
	<Calendar>
		<UID>2</UID>
		<Name>24 Hours</Name>
		<IsBaseCalendar>1</IsBaseCalendar>
		<WeekDays>';
	for ($i = 1; $i <= 7; $i++)
	{
		$output .= '
			<WeekDay>
			<DayType>' . $i . '</DayType>';
			$output .= '
			<DayWorking>1</DayWorking>
                    <WorkingTimes>
                        <WorkingTime>
                            <FromTime>00:00:00</FromTime>
                            <ToTime>00:00:00</ToTime>
                        </WorkingTime>
                    </WorkingTimes>';
		$output .= '
			</WeekDay>';
	} 
	$output .= '
		</WeekDays>
	</Calendar>';

	return $output;
   }

   function mpx_add_milestones(&$mpx) {
      # Now the milestones and all of their stuff!
      $milestones = Milestones::findByProject(
				$this->active_project, $this->logged_user);
      if (count($milestones) > 0) {
        $ms_task_count=0;
        $ms_complete_task_count=0;
        foreach ($milestones as $milestone) {
          // Add milestone to activities
          $name = $milestone->getName();
          $id = $milestone->getId();
          $ms_startdate = substr($milestone->getStartOn(),0,10);
          $ms_enddate = substr($milestone->getDueOn(),0,10);
          $mpx[]=$this->mpx_task($id,$name,$ms_startdate,$ms_enddate,2,0);

          // Grab objects from Milestone
          $objects = $milestone->getObjects($this->logged_user);

          // Gather the tickets and checklists
          $tickets = $objects['Tickets'];
          $checklists = $objects['Checklists'];

          // This is unfortunate, but due to the desgin differences in
          // MS Projects and its ilk and ActiveCollab, if this milestone
          // has any children (tickets or cheklists) we need to add the
          // milestone itself as a child of itself so that the rollup
          // start/end/duration calculations will work.
          if ( (count($tickets) + count($checklists)) > 0) {
            $mpx[]=$this->mpx_task($id,$name,$ms_startdate,$ms_enddate,3,0);
          }

          // Cycle through tickets
          foreach ($tickets as $ticket) {
            $ms_task_count+=$ticket->countTasks();
            $ms_complete_task_count+=$ticket->countCompletedTasks();
            $name = $ticket->getName();
            $id = $ticket->getId();
            $count = $ticket->countTasks();
            $due = substr($ticket->getDueOn(),0,10);
            $status = 'Incomplete';
            if ($ticket->isCompleted()) {
	      $status = 'Completed';
            }

            $tasks = Tasks::findByObject($ticket);
            if (count($tasks) > 1) {
              list($lo,$hi) = $this->get_span_of_tasks($tasks);
              $start=$lo; $due=$hi;
            } elseif (strlen($due) == 0) {
              $due=$ms_enddate;
              $start = $due;
              if (!($ticket->isCompleted())) {
                $status = 'No Due Date';
              }
            }
            # $ticket->getStartOn() is *not* a standard feature of
            # ActiveCollab, but it does get added by the Planning
            # module, and we support it if it exits.
            # http://appsmagnet.com/activecollab-main/planning-module/
            if (method_exists($ticket,'getStartOn')) {
              $start = substr($ticket->getStartOn(),0,10);
              if (strlen($start) == 0) $start=$due;
            }

            $mpx[]=$this->mpx_task($id,"$name ($status)",$start,$due,3,0);
            $this->add_tasks_to_mpx($mpx,$tasks);
          }

          // ... and cycle through checklists
          foreach ($checklists as $checklist) {
            $ms_task_count+=$checklist->countTasks();
            $ms_complete_task_count+=$checklist->countCompletedTasks();
            $name = $checklist->getName();
            $id = $checklist->getId();
            $status = 'Incomplete';
            if ($checklist->isCompleted()) {
		      $status = 'Completed';
            }
            # Checklists don't have due dates and so to show them
            # we put them in as a JpMileStone on today, with no
            # caption and hide their mark.
	    $today = strftime('%Y-%m-%d', time());
            $start=$today; $due=$today;

            $tasks = Tasks::findByObject($checklist);
            if (count($tasks) > 1) {
              list($lo,$hi) = $this->get_span_of_tasks($tasks);
              $start=$lo; $due=$hi;
            }
            $mpx[]=$this->mpx_task($id,"$name ($status)",$start,$due,3,0);
            $this->add_tasks_to_mpx($mpx,$tasks);
          }
        }
      }
   }

   # A helper function that handles WBS incrementing for dload_mpx()
   function wbs_inc($level) {
     if ($level == 0) {
       return "0";
     }
     $level--;
     $this->wbs[$level]++;
     if (count($this->wbs) > $level) {
       foreach(range($level + 1, count($this->wbs)) as $clear_level) {
         $this->wbs[$clear_level] = 0;
       }
     }
     $wbs_txt=join(".", array_slice($this->wbs,0,$level+1));
     return $wbs_txt;
   }
   # Turns a date into a MXP-formatted date
   function mpx_date($date) {
     $t = strtotime($date . "T08:00:00");
     if ($this->mpx_format == 'mpx') {
       $d = date("m/d/Y", $t) ;
       $w = date("D", $t) ;
       return "$w $d";
     } else {
       if (strlen($date) == 0) { return ''; }
       return date('Y-m-d\TH:i:s',$t); // for format='mpxml'
     }
   }

   # Calculates a duration in days between two dates and returns "Nd"
   function mpx_duration($date1,$date2) {
    if (strlen($date1) == 0 || strlen($date2) == 0) {
      return '';
    }
    $seconds = abs(strtotime($date1) - strtotime($date2));
    $days = floor($seconds/60/60/24);  
    $duration = $days ."d";  
    if ($this->mpx_format == 'mpxml') {
      $days++;
      #$duration='P0Y0M' . $days . 'DT00H00M00S';
      $duration='P' . $days . 'D';
      #$duration='PT' . $days * 8 . 'H';
    }
    return $duration;  
   }

   function mpx_task($id,$name,$start,$end,$level,$hide_bar) {
    // We use this function to find the extrene lo and hi taks dates
    if (preg_replace("/[^0-9]/", "", $this->mpx_date_lo) >
		preg_replace("/[^0-9]/", "", $start) && strlen($start)) {
       $this->mpx_date_lo=$start;
     }
     if (preg_replace("/[^0-9]/", "", $this->mpx_date_hi) <
		preg_replace("/[^0-9]/", "", $end) && strlen($end)) {
       $this->mpx_date_hi=$end;
     }

     // Now do our real work
     if ($this->mpx_format == 'mpx') {
       $hide_bar_txt="No";
       if ($hide_bar) { $hide_bar_txt="Yes"; }
       $data=array($this->mpx_task_id++, $id, $name,
		$this->mpx_duration($start,$end),
		$this->mpx_date($start), $this->mpx_date($end),
		$level, $this->wbs_inc($level), $hide_bar_txt);
       return $this->mpx_buildline('70',',',$data);
     } elseif ($this->mpx_format == 'mpxml') {
       $wbs=$this->wbs_inc($level);
       $t = '<Task>
   <UID>' . $id . '</UID>
   <ID>' . $this->mpx_task_id++ . '</ID>
   <Name>' . $name . '</Name>
   <Type>0</Type>
   <IsNull>0</IsNull>
   <CreateDate>' . date('Y-m-d\TH:i:s') . '</CreateDate>
   <WBS>' . $wbs . '</WBS>
   <OutlineNumber>'. $wbs . '</OutlineNumber>
   <OutlineLevel>' . $level . '</OutlineLevel>
   <Priority>' . '500' . '</Priority>
   <Start>' . $this->mpx_date($start) . '</Start>' .
   "\n" .
   #<Finish>' . $this->mpx_date($end) . '</Finish>
   '<Duration>' . $this->mpx_duration($start,$end) . '</Duration>
   <DurationFormat>7</DurationFormat>
   <Work>PT0H0M0S</Work>
   <EffortDriven>1</EffortDriven>
   <Recurring>0</Recurring>
   <OverAllocated>0</OverAllocated>
   <Estimated>0</Estimated>
   <Milestone>' . '0' . '</Milestone>
   <Summary>0</Summary>
   <Critical>0</Critical>
   <IsSubproject>0</IsSubproject>
   <IsSubprojectReadOnly>0</IsSubprojectReadOnly>
   <ExternalTask>0</ExternalTask>
   <StartVariance>0</StartVariance>
   <FinishVariance>0</FinishVariance>
   <WorkVariance>0</WorkVariance>
   <FreeSlack>0</FreeSlack>
   <TotalSlack>0</TotalSlack>
   <FixedCost>0</FixedCost>
   <FixedCostAccrual>3</FixedCostAccrual>
   <PercentComplete>0</PercentComplete>
   <PercentWorkComplete>0</PercentWorkComplete>
   <Cost>0</Cost>
   <OvertimeCost>0</OvertimeCost>
   <OvertimeWork>PT0H0M0S</OvertimeWork>
   <ActualDuration>PT8H0M0S</ActualDuration>
   <ActualCost>0</ActualCost>
   <ActualOvertimeCost>0</ActualOvertimeCost>
   <ActualWork>PT0H0M0S</ActualWork>
   <ActualOvertimeWork>PT0H0M0S</ActualOvertimeWork>
   <RegularWork>PT0H0M0S</RegularWork>
   <RemainingDuration>PT0H0M0S</RemainingDuration>
   <RemainingCost>0</RemainingCost>
   <RemainingWork>PT0H0M0S</RemainingWork>
   <RemainingOvertimeCost>0</RemainingOvertimeCost>
   <RemainingOvertimeWork>PT0H0M0S</RemainingOvertimeWork>
   <ACWP>0</ACWP>
   <CV>0</CV>
   <ConstraintType>4</ConstraintType>
   <ConstraintDate>' . $this->mpx_date($start) . '</ConstraintDate>
   <CalendarUID>-1</CalendarUID>
   <LevelAssignments>0</LevelAssignments>
   <LevelingCanSplit>0</LevelingCanSplit>
   <LevelingDelay>0</LevelingDelay>
   <LevelingDelayFormat>5</LevelingDelayFormat>
   <IgnoreResourceCalendar>0</IgnoreResourceCalendar>
   <HideBar>0</HideBar>
   <Rollup>0</Rollup>
   <BCWS>0</BCWS>
   <BCWP>0</BCWP>
   <PhysicalPercentComplete>0</PhysicalPercentComplete>
   <EarnedValueMethod>0</EarnedValueMethod>
' .
#   <TimephasedData>
#    <Type>11</Type>
#    <UID>2</UID>
#    <Start>2005-05-30T08:00:00</Start>
#    <Finish>2005-05-30T17:00:00</Finish>
#    <Unit>2</Unit>
#    <Value>50</Value>
#   </TimephasedData>
'</Task>';

       return $t;
     } else {
       error_log("mpx_task(): \$format='$this->mpx_format' is invalid");
       return '';
     }
   }

   function mpx_buildline($record_num,$separator_char,$arr_data) {
     $pattern = "/[$separator_char\"]/";
     $escaped_data = array($record_num);
     foreach ($arr_data as $data) {
       if (preg_match($pattern, $data)) {
         $escaped_data[]='"' . preg_replace('/"/', '""', $data) . '"';
       } else {
         $escaped_data[]=$data;
       }
     }
     return join($separator_char, $escaped_data);
   }

   function short_name($str, $limit) {
     return strlen($str) > $limit ? substr($str, 0, $limit - 3) . '...' : $str;
   } // short_name


    function get_span_of_tasks($tasks) {
      $lo="2999-12-31";
      $hi="1970-01-01";
      foreach ($tasks as $task) {
	$due = substr($task->getDueOn(),0,10);
        if ((integer)str_replace('-','',$due)<(integer)str_replace('-','',$lo)){
          $lo=$due;
        }
        if ((integer)str_replace('-','',$due)>(integer)str_replace('-','',$hi)){
          $hi=$due;
        }
      }
      return array($lo,$hi);
    }

    function add_tasks_to_mpx(&$mpx,$tasks) {
      foreach ($tasks as $task) {
	$name = $task->getName();
	$id = $task->getId();
	$due = substr($task->getDueOn(),0,10);
#        if ($task->isCompleted()) {
#          $due = substr($task->getCompletedOn(),0,10);
#        }
#	$assigned = array();
#	$assignees = $task->getAssignees();
#	if ($assignees) { foreach ($assignees as $assignee) {
#	    $assname = $assignee->getName();
#	    $assname = explode(' ',$assname);
#	    $assigned[] = $assname[0];
#	} } // if
#	if (count($assigned)>0)	$assignedformated = '('. implode(', ', $assigned) .')';

        $start=$due;
        $mpx[]=$this->mpx_task($id,$name,$start,$due,4,0);
      }
    }

  } // ChartsController

?>
