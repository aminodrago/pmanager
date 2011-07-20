<?php /* Smarty version 2.6.16, created on 2011-07-06 17:09:55
         compiled from /home/mensajes/public_html/gestion/activecollab/application/modules/checklists/views/empty_slates/checklists.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'lang', '/home/mensajes/public_html/gestion/activecollab/application/modules/checklists/views/empty_slates/checklists.tpl', 2, false),array('function', 'image_url', '/home/mensajes/public_html/gestion/activecollab/application/modules/checklists/views/empty_slates/checklists.tpl', 5, false),)), $this); ?>
<div id="empty_slate_checklists_checklists" class="empty_slate">
  <h3><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>About Checklists<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
  <ul class="icon_list">
    <li>
      <img src="<?php echo smarty_function_image_url(array('name' => "admin/whatis.gif"), $this);?>
" class="icon_list_icon" alt="" />
      <span class="icon_list_title"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Lists of Tasks<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      <span class="icon_list_description"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Checklist is a list of tasks that need to be done in order to get a checklist completed. When all tasks in the checklist are completed, the checklist is completed automatically. Every task in a list can have priority, due date and multiple assignees<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>.</span>
    </li>
    <li>
      <img src="<?php echo smarty_function_image_url(array('name' => "settings/mailing.gif",'module' => 'system'), $this);?>
" class="icon_list_icon" alt="" />
      <span class="icon_list_title"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email Notifications<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      <span class="icon_list_description"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Subscribe to checklist tasks to receive email notification when tasks are completed or reopened<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>.</span>
    </li>
  </ul>
</div>