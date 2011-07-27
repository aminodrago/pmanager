<?php

  // We need projects controller
  use_controller('project', SYSTEM_MODULE);

  /**
   * Tickets controller
   *
   * @package activeCollab.modules.habilities
   * @subpackage controllers
   */
  class HabilitiesController extends ProjectController {
    
    /**
     * Active module
     *
     * @var string
     */
    var $active_module = HABILITIES_MODULE;
    
    /**
     * Active hability
     *
     * @var Hability
     */
    var $active_hability;
    
    /**
     * Enable categories support for this controller
     *
     * @var boolean
     */
    var $enable_categories = true;
    
    /**
     * Actions that are exposed through API
     *
     * @var array
     */
    var $api_actions = array('index', 'archive', 'view', 'add', 'edit');
  
    /**
     * Constructor
     *
     * @param Request $request
     * @return TicketsController
     */
    function __construct($request) {
      parent::__construct($request);
      
      if($this->logged_user->getProjectPermission('hability', $this->active_project) < PROJECT_PERMISSION_ACCESS) {
        $this->httpError(HTTP_ERR_FORBIDDEN);
      } // if
      
      $habilities_url = habilities_module_url($this->active_project);
      $archive_url = assemble_url('project_habilities_archive', array('project_id' => $this->active_project->getId()));
      
      $this->wireframe->addBreadCrumb(lang('Tickets'), $habilities_url);
      
      $add_hability_url = false;
      if(Hability::canAdd($this->logged_user, $this->active_project)) {
        $params = null;
        if($this->active_category->isLoaded()) {
          $params = array('category_id' => $this->active_category->getId());
        } // if
        $add_hability_url = habilities_module_add_hability_url($this->active_project, $params);
        
        $this->wireframe->addPageAction(lang('New Ticket'), $add_hability_url);
      } // if
      
      $hability_id = $this->request->getId('hability_id');
      if($hability_id) {
        $this->active_hability = Habilities::findByHabilityId($this->active_project, $hability_id);
      } // if
      
      if(instance_of($this->active_category, 'Category') && $this->active_category->isLoaded()) {
        $this->wireframe->addBreadCrumb($this->active_category->getName(), $this->active_category->getViewUrl());
      } // if
      
      if(instance_of($this->active_hability, 'Ticket')) {
        if($this->active_hability->isCompleted()) {
          $this->wireframe->addBreadCrumb(lang('Archive'), $archive_url);
        } // if
        $this->wireframe->addBreadCrumb($this->active_hability->getName(), $this->active_hability->getViewUrl());
      } else {
        $this->active_hability = new Ticket();
      } // if
      
      $this->smarty->assign(array(
        'habilities_url'           => $habilities_url,
        'habilities_archive_url'   => $archive_url,
        'add_hability_url'        => $add_hability_url,
        'active_hability'         => $this->active_hability,
        'page_tab'              => 'habilities',
        'mass_edit_habilities_url' => assemble_url('project_habilities_mass_edit', array('project_id' => $this->active_project->getId())),
      ));
    } // __construct
    
    /**
     * Show habilities index page
     *
     * @param void
     * @return null
     */
    function index() {
      if($this->request->isApiCall()) {
        $this->serveData(Tickets::findOpenByProject($this->active_project, STATE_VISIBLE, $this->logged_user->getVisibility()), 'habilities');
      } else {
        if($this->active_category->isLoaded()) {
          $habilities = Milestones::groupByMilestone(
            Tickets::findOpenByCategory($this->active_category, STATE_VISIBLE, $this->logged_user->getVisibility()), 
            STATE_VISIBLE, $this->logged_user->getVisibility()
          );
        } else {
          $hability = Milestones::groupByMilestone(
            Habilities::findOpenByProject($this->active_project, STATE_VISIBLE, $this->logged_user->getVisibility()), 
            STATE_VISIBLE, $this->logged_user->getVisibility()
          );
        } // if
        
        $this->smarty->assign(array(
          'categories' => Categories::findByModuleSection($this->active_project, TICKETS_MODULE, 'habilities'),
          'groupped_habilities' => $habilities,
          'milestones' => Milestones::findActiveByProject($this->active_project, STATE_VISIBLE, $this->logged_user->getVisibility()),
          'can_add_hability' => Hability::canAdd($this->logged_user, $this->active_project),
          'can_manage_categories' => $this->logged_user->isProjectLeader($this->active_project) || $this->logged_user->isProjectManager(), 
        ));
        
        js_assign('can_manage_habilities', Hability::canManage($this->logged_user, $this->active_project));
      } // if
    } // index
    
    /**
     * Override view category page
     *
     * @param void
     * @return null
     */
    function view_category() {
      $this->redirectTo('project_habilities', array(
        'project_id' => $this->active_project->getId(),
        'category_id' => $this->request->getId('category_id')
      ));
    } // view_category
    
    /**
     * Show completed habilities
     *
     * @param void
     * @return null
     */
    function archive() {
      if($this->request->isApiCall()) {
        $this->serveData(Tickets::findCompletedByProject($this->active_project, STATE_VISIBLE, $this->logged_user->getVisibility()), 'habilities');
      } else {
        $this->wireframe->addBreadCrumb(lang('Archive'), assemble_url('project_habilities_archive', array('project_id' => $this->active_project->getId())));
      
        $per_page = 15;
        $page = (integer) $this->request->get('page');
        if($page < 1) {
          $page = 1;
        } // if
        
        if($this->active_category->isLoaded()) {
          list($habilities, $pagination) = Habilities::paginateCompletedByCategory($this->active_category, $page, $per_page, STATE_VISIBLE, $this->logged_user->getVisibility());
        } else {
          list($habilities, $pagination) = Habilities::paginateCompletedByProject($this->active_project, $page, $per_page, STATE_VISIBLE, $this->logged_user->getVisibility());
        } // if
        
        $this->smarty->assign(array(
          'habilities' => $habilities,
          'pagination' => $pagination,
          'categories' => Categories::findByModuleSection($this->active_project, TICKETS_MODULE, 'habilities'),
        ));
      } // if
    } // archive
    
    /**
     * Show single hability
     *
     * @param void
     * @return null
     */
    function view() {
      if($this->active_hability->isNew()) {
        $this->httpError(HTTP_ERR_NOT_FOUND);
      } // if
      
      if(!$this->active_hability->canView($this->logged_user)) {
        $this->httpError(HTTP_ERR_FORBIDDEN);
      } // if
      
      if($this->request->isApiCall()) {
        $this->serveData($this->active_hability, 'hability', array(
          'describe_comments'    => true, 
          'describe_tasks'       => true, 
          'describe_attachments' => true,
          'describe_assignees'   => true,
        ));
      } else {
        ProjectObjectViews::log($this->active_hability, $this->logged_user);
        
        $page = (integer) $this->request->get('page');
        if($page < 1) {
          $page = 1;
        } // if
        
        list($comments, $pagination) = $this->active_hability->paginateComments($page, $this->active_hability->comments_per_page, $this->logged_user->getVisibility());
        
        $this->smarty->assign(array(
          'comments' => $comments,
          'pagination' => $pagination,
          'counter' => ($page - 1) * $this->active_hability->comments_per_page,
        ));
      } // if
    } // view
    
    /**
     * Create a new hability
     *
     * @param void
     * @return null
     */
    function add() {
      $this->wireframe->print_button = false;
      
      if($this->request->isApiCall() && !$this->request->isSubmitted()) {
        $this->httpError(HTTP_ERR_BAD_REQUEST);
      } // ifs
      
      if(!Ticket::canAdd($this->logged_user, $this->active_project)) {
        $this->httpError(HTTP_ERR_FORBIDDEN);
      } // if
      
      $hability_data = $this->request->post('hability');
      if(!is_array($hability_data)) {
        $hability_data = array(
          'visibility'   => $this->active_project->getDefaultVisibility(),
          'milestone_id' => $this->request->get('milestone_id'),
          'parent_id'    => $this->request->get('category_id'),
        );
      } // if
      
      $this->smarty->assign('hability_data', $hability_data);
      
      if($this->request->isSubmitted()) {
        db_begin_work();
               
        $this->active_hability = new Hability();
        
        attach_from_files($this->active_hability, $this->logged_user);
        
        $this->active_hability->setAttributes($hability_data);
        $this->active_hability->setProjectId($this->active_project->getId());
        $this->active_hability->setCreatedBy($this->logged_user);
        $this->active_hability->setState(STATE_VISIBLE);
        
        $save = $this->active_hability->save();
        
        if($save && !is_error($save)) {
          $subscribers = array($this->logged_user->getId());
          if(is_foreachable(array_var($hability_data['assignees'], 0))) {
            $subscribers = array_merge($subscribers, array_var($hability_data['assignees'], 0));
          } else {
            $subscribers[] = $this->active_project->getLeaderId();
          } // if
          
          if(!in_array($this->active_project->getLeaderId(), $subscribers)) {
            $subscribers[] = $this->active_project->getLeaderId();
          } // if
          
          Subscriptions::subscribeUsers($subscribers, $this->active_hability);
          
          db_commit();
          $this->active_hability->ready();
          
          if($this->request->getFormat() == FORMAT_HTML) {
            flash_success('Hability #:hability has been added', array('hability_id' => $this->active_hability->getHabilityId()));
            $this->redirectToUrl($this->active_hability->getViewUrl());
          } else {
            $this->serveData($this->active_hability, 'hability');
          } // if
        } else {
          db_rollback();
          
          if($this->request->getFormat() == FORMAT_HTML) {
            $this->smarty->assign('errors', $save);
          } else {
            $this->serveData($save);
          } // if
        } // if
      } // if
    } // add
    
    /**
     * Quick add hability
     *
     * @param void
     * @return null
     */
    function quick_add() {
      if(!Hability::canAdd($this->logged_user, $this->active_project)) {
      	$this->httpError(HTTP_ERR_FORBIDDEN, lang("You don't have permission for this action"), true, true);
      } // if
      
      $this->skip_layout = true;
           
      $hability_data = $this->request->post('hability');
      if(!is_array($hability_data)) {
        $hability_data = array(
          'visibility'   => $this->active_project->getDefaultVisibility(),
        );
      } // if
      
      $this->smarty->assign(array(
        'hability_data' => $hability_data,
        'quick_add_url' => assemble_url('project_habilities_quick_add', array('project_id' => $this->active_project->getId())),
      ));
      
      if ($this->request->isSubmitted()) {
        db_begin_work();
        
        $this->active_hability = new Hability();
        
        if (count($_FILES > 0)) {
          attach_from_files($this->active_hability, $this->logged_user);  
        } // if
        
        $this->active_hability->setAttributes($hability_data);
        $this->active_hability->setBody(clean(array_var($hability_data, 'body', null)));
        if(!isset($hability_data['priority'])) {
          $this->active_hability->setPriority(PRIORITY_NORMAL);
        } // if
        $this->active_hability->setProjectId($this->active_project->getId());
        $this->active_hability->setCreatedBy($this->logged_user);
        $this->active_hability->setState(STATE_VISIBLE);
        
        $save = $this->active_hability->save();
        if($save && !is_error($save)) {
          $subscribers = array($this->logged_user->getId());
          if(is_foreachable(array_var($hability_data['assignees'], 0))) {
            $subscribers = array_merge($subscribers, array_var($hability_data['assignees'], 0));
          } else {
            $subscribers[] = $this->active_project->getLeaderId();
          } // if
          Subscriptions::subscribeUsers($subscribers, $this->active_hability);
          
          db_commit();
          $this->active_hability->ready(); // ready
          
          $this->smarty->assign(array(
            'hability_data' => array('visibility' => $this->active_project->getDefaultVisibility()),
            'active_hability' => $this->active_hability,
            'project_id' => $this->active_project->getId()
          ));
          $this->skip_layout = true;
        } else {
          db_rollback();
          $this->httpError(HTTP_ERR_OPERATION_FAILED, $save->getErrorsAsString(), true, true);
        } // if
      } // if
    } // quick_add
    
    /**
     * Update existing hability
     *
     * @param void
     * @return null
     */
    function edit() {
      $this->wireframe->print_button = false;
      
      if($this->request->isApiCall() && !$this->request->isSubmitted()) {
        $this->httpError(HTTP_ERR_BAD_REQUEST);
      } // ifs
      
      if($this->active_hability->isNew()) {
        $this->httpError(HTTP_ERR_NOT_FOUND);
      } // if
      
      if(!$this->active_hability->canEdit($this->logged_user)) {
        $this->httpError(HTTP_ERR_FORBIDDEN);
      } // if
      
      $hability_data = $this->request->post('hability');
      if(!is_array($hability_data)) {
        $hability_data = array(
          'name' => $this->active_hability->getName(),
          'body' => $this->active_hability->getBody(),
          'visibility' => $this->active_hability->getVisibility(),
          'parent_id' => $this->active_hability->getParentId(),
          'milestone_id' => $this->active_hability->getMilestoneId(),
          'priority' => $this->active_hability->getPriority(),
          'assignees' => Assignments::findAssignmentDataByObject($this->active_hability),
          'tags' => $this->active_hability->getTags(),
          'due_on' => $this->active_hability->getDueOn(),
        );
      } // if
      $this->smarty->assign('hability_data', $hability_data);
      
      if($this->request->isSubmitted()) {
        if(!isset($hability_data['assignees'])) {
          $hability_data['assignees'] = array(array(), 0);
        } // if
        
        db_begin_work();
        $this->active_hability->setAttributes($hability_data);
        $save = $this->active_hability->save();
        
        if($save && !is_error($save)) {
          db_commit();
          
          if($this->request->getFormat() == FORMAT_HTML) {
            flash_success('Hability #:hability_id has been updated', array('hability_id' => $this->active_hability->getHabilityId()));
            $this->redirectToUrl($this->active_hability->getViewUrl());
          } else {
            $this->serveData($this->active_hability, 'hability');
          } // if
        } else {
          db_rollback();
          
          if($this->request->getFormat() == FORMAT_HTML) {
            $this->smarty->assign('errors', $save);
          } else {
            $this->serveData($save);
          } // if
        } // if
      } // if
    } // edit
    
    /**
     * Update multiple habilities
     *
     * @param void
     * @return null
     */
    function mass_update() {
      if($this->request->isSubmitted()) {
        $action = $this->request->post('with_selected');
        if(trim($action) == '') {
          flash_error('Please select what you want to do with selected habilities');
          $this->redirectToReferer($this->smarty->get_template_vars('habilities_url'));
        } // if
        
        $hability_ids = $this->request->post('habilities');
        $habilities = Habilities::findByIds($hability_ids, STATE_VISIBLE, $this->logged_user->getVisibility());
        
        $updated = 0;
        if(is_foreachable($habilities)) {
          
          // Complete selected habilities
          if($action == 'complete') {
            $message = lang(':count habilities completed');
            foreach($habilities as $hability) {
              if($hability->isOpen() && $hability->canChangeCompleteStatus($this->logged_user)) {
                $complete = $hability->complete($this->logged_user);
                if($complete && !is_error($complete)) {
                  $updated++;
                } // if
              } // if
            } // foreach
            
          // Open selected habilities
          } elseif($action == 'open') {
            $message = lang(':count habilities opened');
            foreach($habilities as $hability) {
              if($hability->isCompleted() && $hability->canChangeCompleteStatus($this->logged_user)) {
                $open = $hability->open($this->logged_user);
                if($open && !is_error($open)) {
                  $updated++;
                } // if
              } // if
            } // foreach
            
          // Mark object as starred
          } elseif($action == 'star') {
            $message = lang(':count habilities starred');
            foreach($habilities as $hability) {
              $star = $hability->star($this->logged_user);
              if($star && !is_error($star)) {
                $updated++;
              } // if
            } // foreach
            
          // Unstar objects
          } elseif($action == 'unstar') {
            $message = lang(':count habilities unstarred');
            foreach($habilities as $hability) {
              $unstar = $hability->unstar($this->logged_user);
              if($unstar && !is_error($unstar)) {
                $updated++;
              } // if
            } // foreach
            
          // Move selected objects to Trash
          } elseif($action == 'trash') {
            $message = lang(':count habilities moved to Trash');
            foreach($habilities as $hability) {
              if($hability->canDelete($this->logged_user)) {
                $delete = $hability->moveToTrash();
                if($delete && !is_error($delete)) {
                  $updated++;
                } // if
              } // if
            } // foreach
            
          // Set a selected priority
          } elseif(str_starts_with($action, 'set_priority')) {
            $priority = (integer) substr($action, 13);
            $message = lang(':count habilities updated');
            foreach($habilities as $hability) {
              if($hability->canEdit($this->logged_user)) {
                $hability->setPriority($priority);
                $save = $hability->save();
                if($save && !is_error($save)) {
                  $updated++;
                } // if
              } // if
            } // foreach
            
          // Set visibility
          } elseif(str_starts_with($action, 'set_visibility')) {
            $visibility = (integer) substr($action, 15);
            $message = lang(':count habilities updated');
            foreach($habilities as $hability) {
              if($hability->canEdit($this->logged_user)) {
                $hability->setVisibility($visibility);
                $save = $hability->save();
                if($save && !is_error($save)) {
                  $updated++;
                } // if
              } // if
            } // foreach
            
          // Move this hability to a given milestone
          } elseif(str_starts_with($action, 'move_to_milestone')) {
            if($action == 'move_to_milestone') {
              $milestone_id = null;
            } else {
              $milestone_id = (integer) substr($action, 18);
            } // if
            
            $message = lang(':count habilities updated');
            foreach($habilities as $hability) {
              if($hability->canEdit($this->logged_user)) {
                $hability->setMilestoneId($milestone_id);
                $save = $hability->save();
                if($save && !is_error($save)) {
                  $updated++;
                } // if
              } // if
            } // foreach
            
          // Move selected habilities to selected category
          } elseif(str_starts_with($action, 'move_to_category')) {
            if($action == 'move_to_category') {
              $category_id = null;
            } else {
              $category_id = (integer) substr($action, 17);
            } // if
            
            $category = $category_id ? Categories::findById($category_id) : null;
            
            $message = lang(':count habilities updated');
            foreach($habilities as $hability) {
              if($hability->canEdit($this->logged_user)) {
                $hability->setParent($category, false);
                $save = $hability->save();
                if($save && !is_error($save)) {
                  $updated++;
                } // if
              } // if
            } // foreach
            
          } else {
            $this->httpError(HTTP_ERR_BAD_REQUEST);
          } // if
          
          flash_success($message, array('count' => $updated));
          $this->redirectToReferer($this->smarty->get_template_vars('habilities_url'));
        } else {
          flash_error('Please select habilities that you would like to update');
          $this->redirectToReferer($this->smarty->get_template_vars('habilities_url'));
        } // if
      } else {
        $this->httpError(HTTP_ERR_BAD_REQUEST);
      } // if
    } // mass_update
    
    /**
     * Show hability changes
     *
     * @param void
     * @return null
     */
    function changes() {
      if($this->active_hability->isNew()) {
        $this->httpError(HTTP_ERR_NOT_FOUND);
      } // if
      
      if(!$this->active_hability->canView($this->logged_user)) {
        $this->httpError(HTTP_ERR_FORBIDDEN);
      } // if
      
      $this->skip_layout = $this->request->isApiCall() || $this->request->isAsyncCall();
      
      $this->smarty->assign('changes', $this->active_hability->getChanges());
    } // changes
    
    /**
     * Export habilities
     *
     * @param void
     * @return null
     */
    function export() {
      $object_visibility = array_var($_GET, 'visibility', VISIBILITY_NORMAL);
      $exportable_modules = explode(',', array_var($_GET,'modules', null));
      if (!is_foreachable($exportable_modules)) {
        $exportable_modules = null;
      } // if
      
      require_once(PROJECT_EXPORTER_MODULE_PATH.'/models/ProjectExporterOutputBuilder.class.php');
      
      $output_builder = new ProjectExporterOutputBuilder($this->active_project, $this->smarty, $this->active_module, $exportable_modules);
      if (!$output_builder->createOutputFolder()) {
        $this->serveData($output_builder->execution_log, 'execution_log', null, FORMAT_JSON);
      } // if
      $output_builder->createAttachmentsFolder();
      
      $module_categories = Categories::findByModuleSection($this->active_project, $this->active_module, $this->active_module);
      $module_objects = Habilities::findByProject($this->active_project, null , STATE_VISIBLE, $object_visibility);

      $output_builder->setFileTemplate($this->active_module, $this->controller_name, 'index');
      $output_builder->smarty->assign('categories',$module_categories);
      $output_builder->smarty->assign('objects', $module_objects);
      $output_builder->outputToFile('index');
                 
      // export habilities by categories
      if (is_foreachable($module_categories)) {
        foreach ($module_categories as $module_category) {
          if (instance_of($module_category,'Category')) {
            $output_builder->smarty->assign(array(
              'current_category' => $module_category,
              'objects' => Habilities::findByProject($this->active_project, $module_category, STATE_VISIBLE, $object_visibility),
            ));
            $output_builder->outputToFile('category_'.$module_category->getId());
          } // if
        } // foreach
      } // if
      
      // export habilities
      if (is_foreachable($module_objects)) {
        $output_builder->setFileTemplate($this->active_module, $this->controller_name, 'object');
        foreach ($module_objects as $module_object) {
          if (instance_of($module_object,'Hability')) {
            $output_builder->outputAttachments($module_object->getAttachments());
            
            $comments = $module_object->getComments($object_visibility);
            $output_builder->outputObjectsAttachments($comments);
            
            if (module_loaded('timetracking')) {
              $timerecords = TimeRecords::findByParent($module_object, null, STATE_VISIBLE, $object_visibility);
              $total_time = TimeRecords::calculateTime($timerecords);
            } else {
              $timerecords = null;
              $total_time = 0;
            } // if
            
            $output_builder->smarty->assign(array(
              'timerecords' => $timerecords,
              'total_time'  => $total_time,
            	'object' => $module_object,
            	'comments' => $comments,
            ));
            $output_builder->outputToFile('hability_'.$module_object->getId());
          } // if
        } // foreach
      } // if
      
      $this->serveData($output_builder->execution_log, 'execution_log', null, FORMAT_JSON);
    } // export
    
    /**
     * Show and process reorder task form
     *
     * @param void
     * @return null
     */
    function reorder_habilities() {
      $this->wireframe->print_button = false;
      
      $milestone = Milestones::findById($this->request->get('milestone_id'));
      if (instance_of($milestone, 'Milestone')) {
        $milestone_id = $milestone->getId();
      } else {
        $milestone_id = null;
      } // if
      
      if (!$this->request->isSubmitted()) {
        $this->httpError(HTTP_ERR_BAD_REQUEST, null, true, true);
      } // if
      
      if (!Hability::canManage($this->logged_user, $this->active_project)) {
        $this->httpError(HTTP_ERR_FORBIDDEN, null, true, true);
      } // if     
      
      $order_data = $this->request->post('reorder_hability');
      $ids = array_keys($order_data);
      if (is_foreachable($order_data)) {
      	$x = 1;
        foreach ($order_data as $key=>$value) {
        	$order_data[$key] = $x;
        	$x++;
        } // foreach
      } // if
      
      $habilities = Habilities::findByIds($ids, STATE_VISIBLE, $this->logged_user->getVisibility());
      if (is_foreachable($habilities)) {
        foreach ($habilities as $hability) {
          $hability->setMilestoneId($milestone_id);
          $hability->setPosition(array_var($order_data, $hability->getId()));
          $hability->save();
        } // foreach
      } // if
      $this->httpOk();
    } // reorder
  
  } // HabilitiesController

?>