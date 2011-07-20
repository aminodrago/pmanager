<?php /* Smarty version 2.6.16, created on 2011-07-06 17:10:40
         compiled from /home/mensajes/public_html/gestion/activecollab/application/modules/checklists/views/checklists/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'page_object', '/home/mensajes/public_html/gestion/activecollab/application/modules/checklists/views/checklists/view.tpl', 2, false),array('function', 'object_quick_options', '/home/mensajes/public_html/gestion/activecollab/application/modules/checklists/views/checklists/view.tpl', 5, false),array('function', 'action_on_by', '/home/mensajes/public_html/gestion/activecollab/application/modules/checklists/views/checklists/view.tpl', 11, false),array('function', 'milestone_link', '/home/mensajes/public_html/gestion/activecollab/application/modules/checklists/views/checklists/view.tpl', 18, false),array('function', 'object_tags', '/home/mensajes/public_html/gestion/activecollab/application/modules/checklists/views/checklists/view.tpl', 22, false),array('function', 'object_tasks', '/home/mensajes/public_html/gestion/activecollab/application/modules/checklists/views/checklists/view.tpl', 34, false),array('block', 'add_bread_crumb', '/home/mensajes/public_html/gestion/activecollab/application/modules/checklists/views/checklists/view.tpl', 3, false),array('block', 'lang', '/home/mensajes/public_html/gestion/activecollab/application/modules/checklists/views/checklists/view.tpl', 9, false),)), $this); ?>
<?php if (! $this->_tpl_vars['show_only_tasks']): ?>
  <?php echo smarty_function_page_object(array('object' => $this->_tpl_vars['active_checklist']), $this);?>

  <?php $this->_tag_stack[] = array('add_bread_crumb', array()); $_block_repeat=true;smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Details<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  
  <?php echo smarty_function_object_quick_options(array('object' => $this->_tpl_vars['active_checklist'],'user' => $this->_tpl_vars['logged_user']), $this);?>

  <div class="checklist main_object" id="checklist<?php echo $this->_tpl_vars['active_checklist']->getId(); ?>
">
    <div class="body">
      <dl class="properties">
        <dt><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dt>
      <?php if ($this->_tpl_vars['active_checklist']->isCompleted()): ?>
        <dd><?php echo smarty_function_action_on_by(array('user' => $this->_tpl_vars['active_checklist']->getCompletedBy(),'datetime' => $this->_tpl_vars['active_checklist']->getCompletedOn(),'action' => 'Completed'), $this);?>
</dd>
      <?php else: ?>
        <dd><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Open<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
      <?php endif; ?>
      
      <?php if ($this->_tpl_vars['logged_user']->canSeeMilestones($this->_tpl_vars['active_project']) && $this->_tpl_vars['active_checklist']->getMilestoneId()): ?>
        <dt><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Milestone<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dt>
        <dd><?php echo smarty_function_milestone_link(array('object' => $this->_tpl_vars['active_checklist']), $this);?>
</dd>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['active_checklist']->hasTags()): ?>
        <dt><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tags<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dt>
        <dd><?php echo smarty_function_object_tags(array('object' => $this->_tpl_vars['active_checklist']), $this);?>
</dd>
      <?php endif; ?>
      </dl>
    </div>
    
    <?php if ($this->_tpl_vars['active_checklist']->getBody()): ?>
    <div class="body content"><?php echo $this->_tpl_vars['active_checklist']->getFormattedBody(); ?>
</div>
    <?php else: ?>
    <div class="body content details"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Description for this checklist is not provided<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
    <?php endif; ?>
    
    <div class="resources">
      <?php echo smarty_function_object_tasks(array('object' => $this->_tpl_vars['active_checklist'],'force_show' => true), $this);?>

    </div>
    <div class="clear"></div>
  </div>
<?php else: ?>
  <?php echo smarty_function_object_tasks(array('object' => $this->_tpl_vars['active_checklist'],'force_show' => true,'skip_head' => true), $this);?>

<?php endif; ?>