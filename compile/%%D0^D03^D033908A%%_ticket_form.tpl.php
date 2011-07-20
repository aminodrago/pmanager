<?php /* Smarty version 2.6.16, created on 2011-07-06 17:09:07
         compiled from /home/mensajes/public_html/gestion/activecollab/application/modules/tickets/views/tickets/_ticket_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'wrap', '/home/mensajes/public_html/gestion/activecollab/application/modules/tickets/views/tickets/_ticket_form.tpl', 2, false),array('block', 'label', '/home/mensajes/public_html/gestion/activecollab/application/modules/tickets/views/tickets/_ticket_form.tpl', 3, false),array('block', 'editor_field', '/home/mensajes/public_html/gestion/activecollab/application/modules/tickets/views/tickets/_ticket_form.tpl', 9, false),array('block', 'lang', '/home/mensajes/public_html/gestion/activecollab/application/modules/tickets/views/tickets/_ticket_form.tpl', 14, false),array('function', 'text_field', '/home/mensajes/public_html/gestion/activecollab/application/modules/tickets/views/tickets/_ticket_form.tpl', 4, false),array('function', 'attach_files', '/home/mensajes/public_html/gestion/activecollab/application/modules/tickets/views/tickets/_ticket_form.tpl', 18, false),array('function', 'select_assignees_inline', '/home/mensajes/public_html/gestion/activecollab/application/modules/tickets/views/tickets/_ticket_form.tpl', 26, false),array('function', 'select_category', '/home/mensajes/public_html/gestion/activecollab/application/modules/tickets/views/tickets/_ticket_form.tpl', 33, false),array('function', 'select_milestone', '/home/mensajes/public_html/gestion/activecollab/application/modules/tickets/views/tickets/_ticket_form.tpl', 39, false),array('function', 'select_priority', '/home/mensajes/public_html/gestion/activecollab/application/modules/tickets/views/tickets/_ticket_form.tpl', 45, false),array('function', 'select_tags', '/home/mensajes/public_html/gestion/activecollab/application/modules/tickets/views/tickets/_ticket_form.tpl', 50, false),array('function', 'select_date', '/home/mensajes/public_html/gestion/activecollab/application/modules/tickets/views/tickets/_ticket_form.tpl', 55, false),array('function', 'select_visibility', '/home/mensajes/public_html/gestion/activecollab/application/modules/tickets/views/tickets/_ticket_form.tpl', 61, false),)), $this); ?>
<div class="form_left_col">
  <?php $this->_tag_stack[] = array('wrap', array('field' => 'name')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php $this->_tag_stack[] = array('label', array('for' => 'ticketSummary','required' => true)); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Summary<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php echo smarty_function_text_field(array('name' => 'ticket[name]','value' => $this->_tpl_vars['ticket_data']['name'],'id' => 'ticketSummary','class' => 'title required validate_minlength 3'), $this);?>

  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  
  <?php $this->_tag_stack[] = array('wrap', array('field' => 'body')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php $this->_tag_stack[] = array('label', array('for' => 'ticketBody')); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Full description<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php $this->_tag_stack[] = array('editor_field', array('name' => 'ticket[body]','id' => 'ticketBody','inline_attachments' => $this->_tpl_vars['ticket_data']['inline_attachments'])); $_block_repeat=true;smarty_block_editor_field($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo $this->_tpl_vars['ticket_data']['body'];  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_editor_field($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  
  <?php if ($this->_tpl_vars['active_ticket']->isNew()): ?>
    <div class="ctrlHolderContainer">
      <a href="#" class="ctrlHolderToggler button_add attachments"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Attach Files<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>...</a>
      <div class="strlHolderToggled">
      <?php $this->_tag_stack[] = array('wrap', array('field' => 'attachments')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <?php $this->_tag_stack[] = array('label', array()); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Attachments<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php echo smarty_function_attach_files(array('max_files' => 5), $this);?>

      <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div>
    </div>
  <?php endif; ?>
  
  <?php $this->_tag_stack[] = array('wrap', array('field' => 'assignees')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php $this->_tag_stack[] = array('label', array('for' => 'ticketAssignees')); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Assignees<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php echo smarty_function_select_assignees_inline(array('name' => 'ticket[assignees]','value' => $this->_tpl_vars['ticket_data']['assignees'],'object' => $this->_tpl_vars['active_ticket'],'project' => $this->_tpl_vars['active_project'],'choose_responsible' => true), $this);?>

  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="form_right_col">
  <?php $this->_tag_stack[] = array('wrap', array('field' => 'parent_id')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php $this->_tag_stack[] = array('label', array('for' => 'ticketParent')); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Category<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php echo smarty_function_select_category(array('name' => 'ticket[parent_id]','value' => $this->_tpl_vars['ticket_data']['parent_id'],'id' => 'ticketParent','module' => 'tickets','controller' => 'tickets','project' => $this->_tpl_vars['active_project'],'user' => $this->_tpl_vars['logged_user']), $this);?>

  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php if ($this->_tpl_vars['logged_user']->canSeeMilestones($this->_tpl_vars['active_project'])): ?>
  <?php $this->_tag_stack[] = array('wrap', array('field' => 'milestone_id')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php $this->_tag_stack[] = array('label', array('for' => 'ticketMilestone')); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Milestone<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php echo smarty_function_select_milestone(array('name' => 'ticket[milestone_id]','value' => $this->_tpl_vars['ticket_data']['milestone_id'],'project' => $this->_tpl_vars['active_project'],'id' => 'ticketMilestone'), $this);?>

  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  endif; ?>

  <?php $this->_tag_stack[] = array('wrap', array('field' => 'priority')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php $this->_tag_stack[] = array('label', array('for' => 'ticketPriority')); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Priority<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php echo smarty_function_select_priority(array('name' => 'ticket[priority]','value' => $this->_tpl_vars['ticket_data']['priority'],'id' => 'ticketPriority'), $this);?>

  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  
  <?php $this->_tag_stack[] = array('wrap', array('field' => 'tags')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php $this->_tag_stack[] = array('label', array('for' => 'ticketTags')); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tags<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php echo smarty_function_select_tags(array('name' => 'ticket[tags]','value' => $this->_tpl_vars['ticket_data']['tags'],'project' => $this->_tpl_vars['active_project'],'id' => 'ticketTags'), $this);?>

  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  
  <?php $this->_tag_stack[] = array('wrap', array('field' => 'due_on')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php $this->_tag_stack[] = array('label', array('for' => 'ticketDueOn')); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Due on<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php echo smarty_function_select_date(array('name' => 'ticket[due_on]','value' => $this->_tpl_vars['ticket_data']['due_on'],'id' => 'ticketDueOn'), $this);?>

  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  
  <?php if ($this->_tpl_vars['logged_user']->canSeePrivate()): ?>
    <?php $this->_tag_stack[] = array('wrap', array('field' => 'visibility')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
      <?php $this->_tag_stack[] = array('label', array('for' => 'ticketVisibility')); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Visibility<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php echo smarty_function_select_visibility(array('name' => "ticket[visibility]",'value' => $this->_tpl_vars['ticket_data']['visibility'],'project' => $this->_tpl_vars['active_project'],'short_description' => true), $this);?>

    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php else: ?>
    <input type="hidden" name="ticket[visibility]" value="1" />
  <?php endif; ?>
</div>

<div class="clear"></div>