<?php /* Smarty version 2.6.16, created on 2011-07-05 22:16:41
         compiled from C:%5Cwamp%5Cwww%5Cproject%5Cactivecollab/application/modules/timetracking/views/global_timetracking/add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'title', 'C:\\wamp\\www\\project\\activecollab/application/modules/timetracking/views/global_timetracking/add.tpl', 1, false),array('block', 'add_bread_crumb', 'C:\\wamp\\www\\project\\activecollab/application/modules/timetracking/views/global_timetracking/add.tpl', 2, false),array('block', 'form', 'C:\\wamp\\www\\project\\activecollab/application/modules/timetracking/views/global_timetracking/add.tpl', 5, false),array('block', 'wrap_buttons', 'C:\\wamp\\www\\project\\activecollab/application/modules/timetracking/views/global_timetracking/add.tpl', 8, false),array('block', 'submit', 'C:\\wamp\\www\\project\\activecollab/application/modules/timetracking/views/global_timetracking/add.tpl', 9, false),array('function', 'include_template', 'C:\\wamp\\www\\project\\activecollab/application/modules/timetracking/views/global_timetracking/add.tpl', 6, false),array('function', 'assemble', 'C:\\wamp\\www\\project\\activecollab/application/modules/timetracking/views/global_timetracking/add.tpl', 14, false),)), $this); ?>
<?php $this->_tag_stack[] = array('title', array()); $_block_repeat=true;smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New Report<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $this->_tag_stack[] = array('add_bread_crumb', array()); $_block_repeat=true;smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New Time Report<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<div id="add_time_report">
  <?php $this->_tag_stack[] = array('form', array('action' => $this->_tpl_vars['add_report_url'],'method' => 'post','id' => 'time_report_form')); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php echo smarty_function_include_template(array('name' => '_report_form','controller' => 'global_timetracking','module' => 'timetracking'), $this);?>

    
    <?php $this->_tag_stack[] = array('wrap_buttons', array()); $_block_repeat=true;smarty_block_wrap_buttons($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
      <?php $this->_tag_stack[] = array('submit', array()); $_block_repeat=true;smarty_block_submit($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Submit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_submit($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap_buttons($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
<script type="text/javascript">
  App.timetracking.TimeReportForm.init('time_report_form', '<?php echo smarty_function_assemble(array('route' => 'global_time_report_partial_generator'), $this);?>
');
</script>