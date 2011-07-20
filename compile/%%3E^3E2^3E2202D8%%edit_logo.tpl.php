<?php /* Smarty version 2.6.16, created on 2011-07-07 14:44:21
         compiled from /home/mensajes/public_html/gestion/activecollab/application/modules/system/views/companies/edit_logo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'title', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/companies/edit_logo.tpl', 1, false),array('block', 'add_bread_crumb', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/companies/edit_logo.tpl', 2, false),array('block', 'assign_var', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/companies/edit_logo.tpl', 12, false),array('block', 'link', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/companies/edit_logo.tpl', 13, false),array('block', 'wrap', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/companies/edit_logo.tpl', 17, false),array('block', 'label', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/companies/edit_logo.tpl', 18, false),array('block', 'wrap_buttons', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/companies/edit_logo.tpl', 22, false),array('block', 'submit', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/companies/edit_logo.tpl', 23, false),array('function', 'file_field', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/companies/edit_logo.tpl', 19, false),)), $this); ?>
<?php $this->_tag_stack[] = array('title', array()); $_block_repeat=true;smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Update Logo<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $this->_tag_stack[] = array('add_bread_crumb', array()); $_block_repeat=true;smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Update Logo<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<div id="edit_icon">
  <form method="POST" action="<?php echo $this->_tpl_vars['active_company']->getEditLogoUrl(); ?>
" enctype="multipart/form-data" class="uniForm">
    <div class="blockLabels">
      <?php if (file_exists ( $this->_tpl_vars['active_company']->getLogoPath(true) )): ?>
        <div class="current_avatar">
          <div id="updated_icon">
            <img src="<?php echo $this->_tpl_vars['active_company']->getLogoUrl(true); ?>
" alt="" />
          </div>
          <?php $this->_tag_stack[] = array('assign_var', array('name' => 'request_type')); $_block_repeat=true;smarty_block_assign_var($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  if ($this->_tpl_vars['request']->isAsyncCall()): ?>get<?php else: ?>post<?php endif;  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_assign_var($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <p class="details"><?php $this->_tag_stack[] = array('link', array('href' => $this->_tpl_vars['active_company']->getDeleteLogoUrl(),'method' => $this->_tpl_vars['request_type'],'class' => 'delete_current')); $_block_repeat=true;smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete Current Logo<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
        </div>
      <?php endif; ?>
      
      <?php $this->_tag_stack[] = array('wrap', array('field' => 'logo')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <?php $this->_tag_stack[] = array('label', array('for' => 'companyLogo')); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New Logo:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php echo smarty_function_file_field(array('name' => 'logo','id' => 'companyLogo'), $this);?>

      <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      
      <?php $this->_tag_stack[] = array('wrap_buttons', array()); $_block_repeat=true;smarty_block_wrap_buttons($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
      	<?php $this->_tag_stack[] = array('submit', array()); $_block_repeat=true;smarty_block_submit($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Submit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_submit($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap_buttons($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <input type="hidden" style="display: none;" value="submitted" name="submitted"/>
    </div>
  </form>
</div>