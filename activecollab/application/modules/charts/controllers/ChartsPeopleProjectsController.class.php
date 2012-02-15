<?php

  // Extends users controller
  use_controller('users', SYSTEM_MODULE);

  include_once(CHARTS_MODULE_PATH . '/models/ChartsJpGraphGantt.class.php');
  
  /**
   * ProfileProjects controller
   *
   * @package activeCollab.modules.profile_projects
   * @subpackage controllers
   */
  class ChartsPeopleProjectsController extends UsersController {
    /**
     * Active module
     *
     * @var string
     */
    var $active_module = CHARTS_MODULE;
    
    /**
     * Constructor
     *
     * @param Request $request
     * @return FilesController
     */
    function __construct($request) {
      parent::__construct($request);
    } // __construct

    # This is the entry point into this controller. From here, we
    # dispatch to handler functions based on "?type=(xml|mpx|pdf)"
    function people_projects() {
      $projects = Projects::findByUser($this->active_user,array(PROJECT_STATUS_ACTIVE));
      if (count($projects) < 1) {
        ob_clean(); # Clear the output buffer -- something is writing \n there!
        header_remove(); # Remove all of the headers that are already set
        header('Content-Type: text/plain',1);
        print "No projects to export!";
        die();
      }

      # If we have some projects to export, hand the work off the the
      # correct handler based on the output type requested
      $output_type = $this->request->get('type');
      $method = "people_projects_handle_" . $output_type;
      if (method_exists($this, $method)) {
        # Call people_projects_handle_pdf or ... TODO
        return $this->$method($projects);
      }

      ob_clean(); # Clear the output buffer -- something is writing \n there!
      header_remove(); # Remove all of the headers that are already set
      header('Content-Type: text/plain',1);
      print "ChartsPeopleProjectsController::people_projects():\n";
      print "\n";
      print "	ERROR: Do not know how to handle type=$output_type";
      die();
    }

    # Handle XML output
    function people_projects_handle_xml($projects) {
      $project_count=count($projects);
      $output_type='xml';
      ob_clean(); # Clear the output buffer -- something is writing \n there!
      header_remove(); # Remove all of the headers that are already set
      header('Content-Type: text/plain',1);
      #header('Content-Disposition: attachment; filename="gantt.pdf"',1);
      print "ChartsPeopleProjectsController::people_projects_handle_xml():\n";
      print "\n";
      print "	There is a ton of work to do to get this working, but
	the Charts module now knows that you want to see $output_type data for
	the $project_count projects for user " . $this->active_user->getName();
      die();
    }

    # Handle MPX output
    function people_projects_handle_mpx($projects) {
      $project_count=count($projects);
      $output_type='mpx';
      ob_clean(); # Clear the output buffer -- something is writing \n there!
      header_remove(); # Remove all of the headers that are already set
      header('Content-Type: text/plain',1);
      #header('Content-Disposition: attachment; filename="gantt.pdf"',1);
      print "ChartsPeopleProjectsController::people_projects_handle_xml():\n";
      print "\n";
      print "	There is a ton of work to do to get this working, but
	the Charts module now knows that you want to see $output_type data for
	the $project_count projects for user " . $this->active_user->getName();
      die();
    }

    # Handle PDF output
    function people_projects_handle_pdf($projects) {
      # If we don't have FPDF we can't do this...
      if (CHARTS_MODULE_HAVE_FPDF != true) {
        ob_clean(); # Clear the output buffer -- something is writing \n there!
        header_remove(); # Remove all of the headers that are already set
        header('Content-Type: text/plain',1);
        print "ChartsPeopleProjectsController::people_projects_handle_pdf():\n";
        print "\n";
        print "	ERROR: Do not have access to the FPDF PHP library.";
        die();
      }

      $charts_data=array();
      // Calculate start and end date
      $charts_data['start_on']  = str_replace('-','/', substr(DateTimeValue::beginningOfMonth(strftime('%m', time()), strftime('%Y', time())), 0, 10));
      $charts_data['end_on']    = str_replace('-','/', substr(DateTimeValue::endOfMonth(strftime('%m', time()), strftime('%Y', time())), 0, 10));
      $charts_data['showtickets'] = true;
      $charts_data['showchecklists'] = true;
      $charts_data['showtasks'] = true;
      $charts_data['showhgrid'] = true;
      $charts_data['showtoday'] = true;

      # Use ChartsJpGraphGantt::make_gantt() to make the PNGs for our PDF
      $png_files=array();
      foreach ($projects as $project) {
        $project->active_project = $project; # Little hack
        $project->logged_user = $this->logged_user; # Little hack #2
        $gantt = new ChartsJpGraphGantt();
        $results = $gantt->make_gantt($charts_data,$project,1);
        $png_files[] = $results['filefs'];
      }

      # Now biuld the PDF from the PNG files in $png_files
      $pdf=new FPDF('P','in','Letter'); // Portrait, inches, Letter
      $pdf->SetMargins(0,0,0);
      $pdf->SetAutoPageBreak(false);
      foreach ($png_files as $png_file) {
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
        $pdf->AddPage('P',$page_size);
        $pdf->Image($png_file,null,null,$page_width);
      }
      $pdf_file = CHARTS_OUTPUT_IMG_DIR ."/".md5(join('',$png_files)).".pdf";
      $pdf->Output($pdf_file);

      // Send the PDF file and then unlink it.
      ob_clean(); # Clear the output buffer -- something is writing \n there!
      header_remove(); # Remove all of the headers that are already set
      header('Content-Type: application/pdf',1);
      header('Content-Disposition: attachment; filename="gantts.pdf"',1);
      readfile($pdf_file);
      unlink($pdf_file);
      die();
    }

  } // ChartsPeopleProjectsController

?>

