<?php /* Smarty version 2.6.16, created on 2011-07-06 23:06:50
         compiled from /home/mensajes/public_html/gestion/activecollab/application/modules/resources/views/tasks/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'title', '/home/mensajes/public_html/gestion/activecollab/application/modules/resources/views/tasks/edit.tpl', 1, false),array('block', 'add_bread_crumb', '/home/mensajes/public_html/gestion/activecollab/application/modules/resources/views/tasks/edit.tpl', 2, false),array('block', 'lang', '/home/mensajes/public_html/gestion/activecollab/application/modules/resources/views/tasks/edit.tpl', 4, false),array('block', 'form', '/home/mensajes/public_html/gestion/activecollab/application/modules/resources/views/tasks/edit.tpl', 6, false),array('block', 'wrap_buttons', '/home/mensajes/public_html/gestion/activecollab/application/modules/resources/views/tasks/edit.tpl', 8, false),array('block', 'submit', '/home/mensajes/public_html/gestion/activecollab/application/modules/resources/views/tasks/edit.tpl', 9, false),array('function', 'include_template', '/home/mensajes/public_html/gestion/activecollab/application/modules/resources/views/tasks/edit.tpl', 7, false),)), $this); ?>
<?php $this->_tag_stack[] = array('title', array()); $_block_repeat=true;smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit task<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $this->_tag_stack[] = array('add_bread_crumb', array()); $_block_repeat=true;smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit task<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<p>&laquo; <?php $this->_tag_stack[] = array('lang', array('view_url' => $this->_tpl_vars['active_task_parent']->getViewUrl(),'name' => $this->_tpl_vars['active_task_parent']->getName())); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Back to <a href=":view_url">:name</a><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>.</p>

<?php $this->_tag_stack[] = array('form', array('action' => $this->_tpl_vars['active_task']->getEditUrl(),'method' => 'post')); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
  <?php echo smarty_function_include_template(array('name' => '_task_form','module' => 'resources','controller' => 'tasks'), $this);?>

  <?php $this->_tag_stack[] = array('wrap_buttons', array()); $_block_repeat=true;smarty_block_wrap_buttons($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php $this->_tag_stack[] = array('submit', array()); $_block_repeat=true;smarty_block_submit($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Submit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_submit($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap_buttons($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>