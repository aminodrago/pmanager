<?php /* Smarty version 2.6.16, created on 2011-07-18 23:24:23
         compiled from /home/mensajes/public_html/gestion/activecollab/application/modules/documents/views/documents/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'page_object', '/home/mensajes/public_html/gestion/activecollab/application/modules/documents/views/documents/view.tpl', 1, false),array('block', 'add_bread_crumb', '/home/mensajes/public_html/gestion/activecollab/application/modules/documents/views/documents/view.tpl', 2, false),array('block', 'link', '/home/mensajes/public_html/gestion/activecollab/application/modules/documents/views/documents/view.tpl', 13, false),)), $this); ?>
<?php echo smarty_function_page_object(array('object' => $this->_tpl_vars['active_document'],'user' => $this->_tpl_vars['active_document']->getCreatedBy()), $this);?>

<?php $this->_tag_stack[] = array('add_bread_crumb', array()); $_block_repeat=true;smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>View<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<div id="document_details">
  <div class="main_object">
    <div class="body content"><?php echo $this->_tpl_vars['active_document']->getBody(); ?>
</div>
  </div>
  
<?php if ($this->_tpl_vars['active_document']->canEdit($this->_tpl_vars['logged_user'])): ?>
	<ul class="object_options">
	<?php if ($this->_tpl_vars['logged_user']->isAdministrator()): ?>
		<?php if ($this->_tpl_vars['active_document']->getIsPinned() == 0): ?>
		<li><?php $this->_tag_stack[] = array('link', array('href' => $this->_tpl_vars['active_document']->getPinUrl(),'method' => 'post','title' => 'Pin')); $_block_repeat=true;smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><span>Pin</span><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
		<?php else: ?>
		<li><?php $this->_tag_stack[] = array('link', array('href' => $this->_tpl_vars['active_document']->getUnpinUrl(),'method' => 'post','title' => 'Unpin')); $_block_repeat=true;smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><span>Unpin</span><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
		<?php endif; ?>
	<?php endif; ?>
		<li><?php $this->_tag_stack[] = array('link', array('href' => $this->_tpl_vars['active_document']->getEditUrl(),'title' => 'Edit')); $_block_repeat=true;smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><span>Edit</span><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
		<li><?php $this->_tag_stack[] = array('link', array('href' => $this->_tpl_vars['active_document']->getDeleteUrl(),'method' => 'post','confirm' => 'Are you sure that you want to permanently delete this document?','title' => 'Delete')); $_block_repeat=true;smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><span>Delete</span><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
	</ul>
<?php endif; ?>
</div>