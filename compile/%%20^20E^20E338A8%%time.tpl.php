<?php /* Smarty version 2.6.16, created on 2011-07-06 17:11:57
         compiled from /home/mensajes/public_html/gestion/activecollab/application/modules/timetracking/views/empty_slates/time.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'lang', '/home/mensajes/public_html/gestion/activecollab/application/modules/timetracking/views/empty_slates/time.tpl', 2, false),array('function', 'image_url', '/home/mensajes/public_html/gestion/activecollab/application/modules/timetracking/views/empty_slates/time.tpl', 5, false),)), $this); ?>
<div id="empty_slate_timetracking_time" class="empty_slate">
  <h3><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>About Time Module<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
  <ul class="icon_list">
    <li>
      <img src="<?php echo smarty_function_image_url(array('name' => "admin/time.gif"), $this);?>
" class="icon_list_icon" alt="" />
      <span class="icon_list_title"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Track Time<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      <span class="icon_list_description"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Every project has its own time page and time can be tracked directly on project. Optionally, the time record can be attached to a ticket or subtasks. Click on the little clock icon next to a ticket or tasks to easily see how much time is already logged, or log your hours<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>.</span>
    </li>
    <li>
      <img src="<?php echo smarty_function_image_url(array('name' => "admin/money.gif"), $this);?>
" class="icon_list_icon" alt="" />
      <span class="icon_list_title"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Billable? Billed?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      <span class="icon_list_description"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Any time record can be marked as billable or non-billable. Additionally, billable hours can be marked as billed. When billed, time record will be crossed over in the list and you will be able to filter it out in reports<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>.</span>
    </li>
    <li>
      <img src="<?php echo smarty_function_image_url(array('name' => "admin/table.gif"), $this);?>
" class="icon_list_icon" alt="" />
      <span class="icon_list_title"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Filter and Export Data<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      <span class="icon_list_description"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Filter time records by date, user and billable / billed status. The filter which you create is reusable and you can run it globally or per project. The results of every filter can be exported in CSV format and used in your favorite spreadsheet application (like Excel, Numbers etc), or sent to your accountant for further processing<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>.</span>
    </li>
  </ul>
</div>