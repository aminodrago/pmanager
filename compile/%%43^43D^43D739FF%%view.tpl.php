<?php /* Smarty version 2.6.16, created on 2011-07-20 20:59:45
         compiled from /var/www/pmanager/activecollab/application/modules/tickets/views/tickets/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'title', '/var/www/pmanager/activecollab/application/modules/tickets/views/tickets/view.tpl', 1, false),array('block', 'add_bread_crumb', '/var/www/pmanager/activecollab/application/modules/tickets/views/tickets/view.tpl', 3, false),array('block', 'lang', '/var/www/pmanager/activecollab/application/modules/tickets/views/tickets/view.tpl', 9, false),array('block', 'pagination', '/var/www/pmanager/activecollab/application/modules/tickets/views/tickets/view.tpl', 65, false),array('function', 'page_object', '/var/www/pmanager/activecollab/application/modules/tickets/views/tickets/view.tpl', 2, false),array('function', 'object_quick_options', '/var/www/pmanager/activecollab/application/modules/tickets/views/tickets/view.tpl', 5, false),array('function', 'action_on_by', '/var/www/pmanager/activecollab/application/modules/tickets/views/tickets/view.tpl', 11, false),array('function', 'object_assignees', '/var/www/pmanager/activecollab/application/modules/tickets/views/tickets/view.tpl', 26, false),array('function', 'milestone_link', '/var/www/pmanager/activecollab/application/modules/tickets/views/tickets/view.tpl', 31, false),array('function', 'object_time', '/var/www/pmanager/activecollab/application/modules/tickets/views/tickets/view.tpl', 36, false),array('function', 'object_tags', '/var/www/pmanager/activecollab/application/modules/tickets/views/tickets/view.tpl', 41, false),array('function', 'object_attachments', '/var/www/pmanager/activecollab/application/modules/tickets/views/tickets/view.tpl', 58, false),array('function', 'object_subscriptions', '/var/www/pmanager/activecollab/application/modules/tickets/views/tickets/view.tpl', 59, false),array('function', 'object_tasks', '/var/www/pmanager/activecollab/application/modules/tickets/views/tickets/view.tpl', 60, false),array('function', 'object_comments', '/var/www/pmanager/activecollab/application/modules/tickets/views/tickets/view.tpl', 70, false),array('function', 'ticket_changes', '/var/www/pmanager/activecollab/application/modules/tickets/views/tickets/view.tpl', 77, false),array('modifier', 'date', '/var/www/pmanager/activecollab/application/modules/tickets/views/tickets/view.tpl', 21, false),)), $this); ?>
<?php $this->_tag_stack[] = array('title', array('id' => $this->_tpl_vars['active_ticket']->getTicketId(),'name' => $this->_tpl_vars['active_ticket']->getName())); $_block_repeat=true;smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Ticket #:id: :name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo smarty_function_page_object(array('object' => $this->_tpl_vars['active_ticket']), $this);?>

<?php $this->_tag_stack[] = array('add_bread_crumb', array()); $_block_repeat=true;smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Details<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php echo smarty_function_object_quick_options(array('object' => $this->_tpl_vars['active_ticket'],'user' => $this->_tpl_vars['logged_user']), $this);?>

<div class="ticket main_object" id="ticket<?php echo $this->_tpl_vars['active_ticket']->getId(); ?>
">
  <div class="body">
    <dl class="properties">
      <dt><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dt>
    <?php if ($this->_tpl_vars['active_ticket']->isCompleted()): ?>
      <dd><?php echo smarty_function_action_on_by(array('user' => $this->_tpl_vars['active_ticket']->getCompletedBy(),'datetime' => $this->_tpl_vars['active_ticket']->getCompletedOn(),'action' => 'Completed'), $this);?>
</dd>
    <?php else: ?>
      <dd><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Open<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
    <?php endif; ?>
    
      <dt><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Priority<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dt>
      <dd><?php echo $this->_tpl_vars['active_ticket']->getFormattedPriority(); ?>
</dd>
      
    <?php if ($this->_tpl_vars['active_ticket']->getDueOn()): ?>
      <dt><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Due on<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dt>
      <dd><?php echo ((is_array($_tmp=$this->_tpl_vars['active_ticket']->getDueOn())) ? $this->_run_mod_handler('date', true, $_tmp, 0) : smarty_modifier_date($_tmp, 0)); ?>
</dd>
    <?php endif; ?>
      
    <?php if ($this->_tpl_vars['active_ticket']->hasAssignees()): ?>
      <dt><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Assignees<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dt>
      <dd><?php echo smarty_function_object_assignees(array('object' => $this->_tpl_vars['active_ticket']), $this);?>
</dd>
    <?php endif; ?>
    
    <?php if ($this->_tpl_vars['logged_user']->canSeeMilestones($this->_tpl_vars['active_project']) && $this->_tpl_vars['active_ticket']->getMilestoneId()): ?>
      <dt><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Milestone<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dt>
      <dd><?php echo smarty_function_milestone_link(array('object' => $this->_tpl_vars['active_ticket']), $this);?>
</dd>
    <?php endif; ?>
      
    <?php if (module_loaded ( 'timetracking' ) && $this->_tpl_vars['logged_user']->getProjectPermission('timerecord',$this->_tpl_vars['active_project'])): ?>
      <dt><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Time<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dt>
      <dd><?php echo smarty_function_object_time(array('object' => $this->_tpl_vars['active_ticket']), $this);?>
</dd>
    <?php endif; ?>
    
    <?php if ($this->_tpl_vars['active_ticket']->hasTags()): ?>
      <dt><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tags<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dt>
      <dd><?php echo smarty_function_object_tags(array('object' => $this->_tpl_vars['active_ticket']), $this);?>
</dd>
    <?php endif; ?>
    </dl>
  
  <?php if ($this->_tpl_vars['active_ticket']->getBody()): ?>
    <div class="body content" id="ticket_body_<?php echo $this->_tpl_vars['active_ticket']->getId(); ?>
"><?php echo $this->_tpl_vars['active_ticket']->getFormattedBody(); ?>
</div>
    <?php if ($this->_tpl_vars['active_ticket']->getSource() == @OBJECT_SOURCE_EMAIL): ?>
      <script type="text/javascript">
        App.EmailObject.init('ticket_body_<?php echo $this->_tpl_vars['active_ticket']->getId(); ?>
');
      </script>
    <?php endif; ?>
  <?php else: ?>
    <div class="body content details"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Full description for this ticket is not provided<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
  <?php endif; ?>
  </div>
  
  <div class="resources">
    <?php echo smarty_function_object_attachments(array('object' => $this->_tpl_vars['active_ticket']), $this);?>

    <?php echo smarty_function_object_subscriptions(array('object' => $this->_tpl_vars['active_ticket']), $this);?>

    <?php echo smarty_function_object_tasks(array('object' => $this->_tpl_vars['active_ticket']), $this);?>

    
    <div class="resource object_comments" id="comments">
      <div class="body">
      <?php if ($this->_tpl_vars['pagination']->getLastPage() > 1): ?>
        <p class="pagination top"><span class="inner_pagination"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php $this->_tag_stack[] = array('pagination', array('pager' => $this->_tpl_vars['pagination'])); $_block_repeat=true;smarty_block_pagination($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo $this->_tpl_vars['active_ticket']->getViewUrl('-PAGE-');  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_pagination($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></p>
        <div class="clear"></div>
        <?php endif; ?>
        
        <?php if ($this->_tpl_vars['pagination']->getLastPage() > $this->_tpl_vars['pagination']->getCurrentPage()): ?>
          <?php echo smarty_function_object_comments(array('object' => $this->_tpl_vars['active_ticket'],'comments' => $this->_tpl_vars['comments'],'show_header' => false,'count_from' => $this->_tpl_vars['count_start'],'next_page' => $this->_tpl_vars['active_ticket']->getViewUrl($this->_tpl_vars['pagination']->getNextPage())), $this);?>

        <?php else: ?>
          <?php echo smarty_function_object_comments(array('object' => $this->_tpl_vars['active_ticket'],'comments' => $this->_tpl_vars['comments'],'show_header' => false,'count_from' => $this->_tpl_vars['count_start']), $this);?>

        <?php endif; ?>
      </div>
    </div>
    
    <?php echo smarty_function_ticket_changes(array('ticket' => $this->_tpl_vars['active_ticket']), $this);?>

  </div>
</div>