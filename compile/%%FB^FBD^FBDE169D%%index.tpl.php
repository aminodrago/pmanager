<?php /* Smarty version 2.6.16, created on 2011-07-06 21:52:44
         compiled from /home/mensajes/public_html/gestion/activecollab/application/modules/calendar/views/project_calendar/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'title', '/home/mensajes/public_html/gestion/activecollab/application/modules/calendar/views/project_calendar/index.tpl', 1, false),array('block', 'add_bread_crumb', '/home/mensajes/public_html/gestion/activecollab/application/modules/calendar/views/project_calendar/index.tpl', 2, false),array('block', 'lang', '/home/mensajes/public_html/gestion/activecollab/application/modules/calendar/views/project_calendar/index.tpl', 8, false),array('function', 'calendar_navigation', '/home/mensajes/public_html/gestion/activecollab/application/modules/calendar/views/project_calendar/index.tpl', 5, false),array('function', 'assemble', '/home/mensajes/public_html/gestion/activecollab/application/modules/calendar/views/project_calendar/index.tpl', 8, false),)), $this); ?>
<?php $this->_tag_stack[] = array('title', array()); $_block_repeat=true;smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Calendar<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $this->_tag_stack[] = array('add_bread_crumb', array()); $_block_repeat=true;smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo $this->_tpl_vars['year']; ?>
 / <?php echo $this->_tpl_vars['month'];  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<div id="calendar">
<?php echo smarty_function_calendar_navigation(array('month' => $this->_tpl_vars['month'],'year' => $this->_tpl_vars['year'],'pattern' => $this->_tpl_vars['navigation_pattern']), $this);?>

<?php echo $this->_tpl_vars['calendar']->render(); ?>


  <p class="calendar_ical"><a href="<?php echo smarty_function_assemble(array('route' => 'project_ical_subscribe','project_id' => $this->_tpl_vars['active_project']->getId()), $this);?>
"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>iCalendar<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></p>
</div>