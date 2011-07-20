<?php /* Smarty version 2.6.16, created on 2011-07-11 22:16:17
         compiled from /home/mensajes/public_html/gestion/activecollab/application/modules/discussions/views/discussions/_discussion_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'wrap', '/home/mensajes/public_html/gestion/activecollab/application/modules/discussions/views/discussions/_discussion_form.tpl', 2, false),array('block', 'label', '/home/mensajes/public_html/gestion/activecollab/application/modules/discussions/views/discussions/_discussion_form.tpl', 3, false),array('block', 'editor_field', '/home/mensajes/public_html/gestion/activecollab/application/modules/discussions/views/discussions/_discussion_form.tpl', 9, false),array('block', 'lang', '/home/mensajes/public_html/gestion/activecollab/application/modules/discussions/views/discussions/_discussion_form.tpl', 14, false),array('function', 'text_field', '/home/mensajes/public_html/gestion/activecollab/application/modules/discussions/views/discussions/_discussion_form.tpl', 4, false),array('function', 'attach_files', '/home/mensajes/public_html/gestion/activecollab/application/modules/discussions/views/discussions/_discussion_form.tpl', 18, false),array('function', 'select_assignees_inline', '/home/mensajes/public_html/gestion/activecollab/application/modules/discussions/views/discussions/_discussion_form.tpl', 27, false),array('function', 'select_category', '/home/mensajes/public_html/gestion/activecollab/application/modules/discussions/views/discussions/_discussion_form.tpl', 36, false),array('function', 'select_milestone', '/home/mensajes/public_html/gestion/activecollab/application/modules/discussions/views/discussions/_discussion_form.tpl', 42, false),array('function', 'select_tags', '/home/mensajes/public_html/gestion/activecollab/application/modules/discussions/views/discussions/_discussion_form.tpl', 48, false),array('function', 'select_visibility', '/home/mensajes/public_html/gestion/activecollab/application/modules/discussions/views/discussions/_discussion_form.tpl', 54, false),)), $this); ?>
<div class="form_left_col">
  <?php $this->_tag_stack[] = array('wrap', array('field' => 'name')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php $this->_tag_stack[] = array('label', array('for' => 'discussionSummary','required' => true)); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Summary<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php echo smarty_function_text_field(array('name' => 'discussion[name]','value' => $this->_tpl_vars['discussion_data']['name'],'id' => 'discussionSummary','class' => 'title required validate_minlength 3'), $this);?>

  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  
  <?php $this->_tag_stack[] = array('wrap', array('field' => 'body')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php $this->_tag_stack[] = array('label', array('for' => 'discussionBody','required' => true)); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Message<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php $this->_tag_stack[] = array('editor_field', array('name' => 'discussion[body]','id' => 'discussionBody','class' => 'validate_callback tiny_value_present','inline_attachments' => $this->_tpl_vars['discussion_data']['inline_attachments'])); $_block_repeat=true;smarty_block_editor_field($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo $this->_tpl_vars['discussion_data']['body'];  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_editor_field($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
   
<?php if ($this->_tpl_vars['active_discussion']->isNew()): ?>
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

<?php if ($this->_tpl_vars['active_discussion']->isNew()): ?>
  <?php $this->_tag_stack[] = array('wrap', array('field' => 'notify_users')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php $this->_tag_stack[] = array('label', array()); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Notify People<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php echo smarty_function_select_assignees_inline(array('name' => 'notify_users','project' => $this->_tpl_vars['active_project']), $this);?>

    <div class="clear"></div>
  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  endif; ?>  
</div>

<div class="form_right_col">
  <?php $this->_tag_stack[] = array('wrap', array('field' => 'parent_id')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php $this->_tag_stack[] = array('label', array('for' => 'discussionParent')); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Category<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php echo smarty_function_select_category(array('name' => 'discussion[parent_id]','value' => $this->_tpl_vars['discussion_data']['parent_id'],'id' => 'discussionParent','module' => 'discussions','controller' => 'discussions','project' => $this->_tpl_vars['active_project'],'user' => $this->_tpl_vars['logged_user'],'optional' => true), $this);?>

  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  
<?php if ($this->_tpl_vars['logged_user']->canSeeMilestones($this->_tpl_vars['active_project'])): ?>
  <?php $this->_tag_stack[] = array('wrap', array('field' => 'milestone_id')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php $this->_tag_stack[] = array('label', array('for' => 'discussionMilestone')); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Milestone<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php echo smarty_function_select_milestone(array('name' => 'discussion[milestone_id]','value' => $this->_tpl_vars['discussion_data']['milestone_id'],'project' => $this->_tpl_vars['active_project']), $this);?>

  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  endif; ?>
  
  <?php $this->_tag_stack[] = array('wrap', array('field' => 'tags')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php $this->_tag_stack[] = array('label', array('for' => 'discussionTags')); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tags<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php echo smarty_function_select_tags(array('name' => 'discussion[tags]','value' => $this->_tpl_vars['discussion_data']['tags'],'project' => $this->_tpl_vars['active_project'],'id' => 'discussionTags'), $this);?>

  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  
  <?php if ($this->_tpl_vars['logged_user']->canSeePrivate()): ?>
    <?php $this->_tag_stack[] = array('wrap', array('field' => 'visibility')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
      <?php $this->_tag_stack[] = array('label', array('for' => 'discussionVisibility')); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Visibility<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php echo smarty_function_select_visibility(array('name' => "discussion[visibility]",'value' => $this->_tpl_vars['discussion_data']['visibility'],'project' => $this->_tpl_vars['active_project'],'short_description' => true), $this);?>

    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php else: ?>
    <input type="hidden" name="discussion[visibility]" value="1" />
  <?php endif; ?>  
</div>

<div class="clear"></div>