<?php
  /**
   * Reports controller
   *
   * @package activeCollab.modules.reports
   * @subpackage models
   */
  class ReportsController extends ApplicationController {

    /**
     * Active module
     *
     * @var string
     */
    var $active_module = REPORTS_MODULE;

    /**
     * Actions available through API
     *
     * @var array
     */
    var $api_actions = array('reports');

    /**
     * Constructor
     *
     * @param Request $request
     * @return PlanningController
     */
    function __construct($request) {
      parent::__construct($request);

      // User's System Role needs explicit permission to see reports
      if(!$this->logged_user->getSystemPermission('can_use_reports')) {
        $this->httpError(HTTP_ERR_FORBIDDEN);
      } // if
	  $reports_url = reports_module_url();
      $this->wireframe->addBreadCrumb(lang('Reports'), $reports_url);
    } // __construct

    /**
     * Show reports index page
     *
     * @param void
     * @return null
     */
    function index() {
		$api_url = reports_module_get_url();
		//'project='.$this->active_project->getId().
		$flash_vars = 'APIURL='.urlencode($api_url).'&APIKey='.urlencode($this->logged_user->getId().'-'.$this->logged_user->getToken());

    	 $this->smarty->assign(array(
        'flash_vars'  => $flash_vars
      ));

    } // index

    /**
     * Get reports data
     *
     * @param void
     * @return null
     */
    function get() {
		$reports = new Reports();
		$data = array('error' => 'Please specify an action');
		$options = array();
		if ($this->request->get('start') != '') {
			$options['start_date'] = $this->request->get('start');
		}
		if ($this->request->get('end') != '') {
			$options['end_date'] = $this->request->get('end');
		}
		switch($this->request->get('do')) {
			case 'projects':
				$data = $reports->getProjects($this->logged_user);
				break;
			case 'language':
				$data = $reports->getLanguage();
				break;
			case 'charts' :
				$projects = $this->request->get('projects');
				$data = $reports->getChartData($projects, $options);
				break;
			default:
				$data = array();
				break;
		}
		//print_r($data);
		$this->serveData($data, null, null, FORMAT_XML);
    } // reports

}
?>