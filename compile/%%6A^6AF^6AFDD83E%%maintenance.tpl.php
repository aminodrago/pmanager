<?php /* Smarty version 2.6.16, created on 2011-07-06 21:53:47
         compiled from /home/mensajes/public_html/gestion/activecollab/application/modules/system/views/empty_slates/maintenance.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'lang', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/empty_slates/maintenance.tpl', 2, false),array('function', 'image_url', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/empty_slates/maintenance.tpl', 6, false),)), $this); ?>
<div id="empty_slate_system_roles" class="empty_slate">
  <h3><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>About Maintenance Mode<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
  
  <ul class="icon_list">
    <li>
      <img src="<?php echo smarty_function_image_url(array('name' => "admin/whatis.gif"), $this);?>
" class="icon_list_icon" alt="" />
      <span class="icon_list_title"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>What is Maintenance Mode?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      <span class="icon_list_description"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>When system is maintenance mode, only administrators will be able to use it. All other users will receive "Service Unavailable" message. You can provide additional information to users by setting Maintenance Message value<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>.</span>
    </li>
    
    <li>
      <img src="<?php echo smarty_function_image_url(array('name' => "admin/maintenance.gif"), $this);?>
" class="icon_list_icon" alt="" />
      <span class="icon_list_title"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>System Maintenance<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      <span class="icon_list_description"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>System maintenance is special mode used when you want to bring down the entire system. This mode is useful when you are upgrading activeCollab for example. Because this mode is dependent on a single file, system will display a message you set while other files are being upgraded. This mode can be turned on by setting MAINTENANCE_MESSAGE option in config/config.php to value you want to display to users<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>.</span>
    </li>
  </ul>
</div>