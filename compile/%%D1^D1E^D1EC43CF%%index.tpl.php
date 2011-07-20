<?php /* Smarty version 2.6.16, created on 2011-07-05 23:12:04
         compiled from C:%5Cwamp%5Cwww%5Cproject%5Cactivecollab/application/modules/documents/views/documents/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'title', 'C:\\wamp\\www\\project\\activecollab/application/modules/documents/views/documents/index.tpl', 1, false),array('block', 'add_bread_crumb', 'C:\\wamp\\www\\project\\activecollab/application/modules/documents/views/documents/index.tpl', 2, false),array('block', 'lang', 'C:\\wamp\\www\\project\\activecollab/application/modules/documents/views/documents/index.tpl', 10, false),array('block', 'pagination', 'C:\\wamp\\www\\project\\activecollab/application/modules/documents/views/documents/index.tpl', 10, false),array('block', 'link', 'C:\\wamp\\www\\project\\activecollab/application/modules/documents/views/documents/index.tpl', 45, false),array('function', 'assemble', 'C:\\wamp\\www\\project\\activecollab/application/modules/documents/views/documents/index.tpl', 10, false),array('function', 'cycle', 'C:\\wamp\\www\\project\\activecollab/application/modules/documents/views/documents/index.tpl', 17, false),array('function', 'image_url', 'C:\\wamp\\www\\project\\activecollab/application/modules/documents/views/documents/index.tpl', 21, false),array('function', 'action_on_by', 'C:\\wamp\\www\\project\\activecollab/application/modules/documents/views/documents/index.tpl', 37, false),array('function', 'in_category_link', 'C:\\wamp\\www\\project\\activecollab/application/modules/documents/views/documents/index.tpl', 37, false),array('function', 'empty_slate', 'C:\\wamp\\www\\project\\activecollab/application/modules/documents/views/documents/index.tpl', 72, false),array('modifier', 'clean', 'C:\\wamp\\www\\project\\activecollab/application/modules/documents/views/documents/index.tpl', 36, false),array('modifier', 'filesize', 'C:\\wamp\\www\\project\\activecollab/application/modules/documents/views/documents/index.tpl', 39, false),)), $this); ?>
<?php $this->_tag_stack[] = array('title', array()); $_block_repeat=true;smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Documents<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $this->_tag_stack[] = array('add_bread_crumb', array()); $_block_repeat=true;smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>List<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<div>
  <div class="object_list">
<?php if (is_foreachable ( $this->_tpl_vars['documents'] )): ?>
  
  <?php if ($this->_tpl_vars['pagination']->getLastPage() > 1): ?>
	  <p class="pagination top">
	    <span class="inner_pagination"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php $this->_tag_stack[] = array('pagination', array('pager' => $this->_tpl_vars['pagination'])); $_block_repeat=true;smarty_block_pagination($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo smarty_function_assemble(array('route' => 'documents','page' => '-PAGE-'), $this); $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_pagination($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
		</p>
  	<div class="clear"></div>
  <?php endif; ?>
  
  <table class="documents_table">
  <?php $_from = $this->_tpl_vars['documents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['document']):
?>
    <tr class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <td class="pin">
      <?php if ($this->_tpl_vars['document']->getIsPinned() == 0): ?>
	      <?php if ($this->_tpl_vars['document']->canPinUnpin($this->_tpl_vars['logged_user'])): ?>
		      <a href="<?php echo $this->_tpl_vars['document']->getPinUrl(); ?>
" class="not_pinned"><img src="<?php echo smarty_function_image_url(array('name' => "icons/not-pinned.16x16.gif"), $this);?>
" title="<?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Not pinned. Click to pin to top<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" alt="" /></a>
		    <?php else: ?>
		      <img src="<?php echo smarty_function_image_url(array('name' => "icons/not-pinned.16x16.gif"), $this);?>
" title="<?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Not pinned<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" alt="" />
				<?php endif; ?>
			<?php else: ?>
				<?php if ($this->_tpl_vars['document']->canPinUnpin($this->_tpl_vars['logged_user'])): ?>
		      <a href="<?php echo $this->_tpl_vars['document']->getUnpinUrl(); ?>
" class="pinned"><img src="<?php echo smarty_function_image_url(array('name' => "icons/pinned.16x16.gif"), $this);?>
" title="<?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Pinned. Click to unpin<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" alt="" /></a>
				<?php else: ?>
		      <img src="<?php echo smarty_function_image_url(array('name' => "icons/pinned.16x16.gif"), $this);?>
" title="<?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Pinned<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" alt="" />
				<?php endif; ?>
		  <?php endif; ?>
		  </td>
      <td class="thumbnail"><a href="<?php echo $this->_tpl_vars['document']->getViewUrl(); ?>
"><img src="<?php echo $this->_tpl_vars['document']->getThumbnailUrl(); ?>
" alt="$document->getName()|clean"/></a></td>
      <td class="name">
      <?php if ($this->_tpl_vars['document']->getType() == 'text'): ?>
        <a href="<?php echo $this->_tpl_vars['document']->getViewUrl(); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['document']->getName())) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
</a>
        <span class="details block"><?php echo smarty_function_action_on_by(array('user' => $this->_tpl_vars['document']->getCreatedBy(),'datetime' => $this->_tpl_vars['document']->getCreatedOn(),'format' => 'date','action' => 'Added on'), $this); if ($this->_tpl_vars['active_document_category']->isNew()): ?> <?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>in<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_in_category_link(array('category_id' => $this->_tpl_vars['document']->getCategoryId(),'user' => $this->_tpl_vars['logged_user']), $this); endif; ?></span>
      <?php else: ?>
        <a href="<?php echo $this->_tpl_vars['document']->getViewUrl(); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['document']->getName())) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
</a>, <?php echo ((is_array($_tmp=$this->_tpl_vars['document']->getSize())) ? $this->_run_mod_handler('filesize', true, $_tmp) : smarty_modifier_filesize($_tmp)); ?>

        <span class="details block"><?php echo smarty_function_action_on_by(array('user' => $this->_tpl_vars['document']->getCreatedBy(),'datetime' => $this->_tpl_vars['document']->getCreatedOn(),'format' => 'date','action' => 'Uploaded on'), $this); if ($this->_tpl_vars['active_document_category']->isNew()): ?> <?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>in<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_in_category_link(array('category_id' => $this->_tpl_vars['document']->getCategoryId(),'user' => $this->_tpl_vars['logged_user']), $this); endif; ?></span>
      <?php endif; ?>
      </td>
      <td class="options">
      <?php if ($this->_tpl_vars['document']->canEdit($this->_tpl_vars['logged_user'])): ?>
        <?php $this->_tag_stack[] = array('link', array('href' => $this->_tpl_vars['document']->getEditUrl(),'title' => 'Edit')); $_block_repeat=true;smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><img src="<?php echo smarty_function_image_url(array('name' => "gray-edit.gif"), $this);?>
" alt="edit" /><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	    <?php endif; ?>
	    <?php if ($this->_tpl_vars['document']->canDelete($this->_tpl_vars['logged_user'])): ?>
	      <span class="delete"><a href="<?php echo $this->_tpl_vars['document']->getDeleteUrl(); ?>
"><img src="<?php echo smarty_function_image_url(array('name' => "gray-delete.gif"), $this);?>
" title="Delete" alt="delete" /></a></span>
	    <?php endif; ?>
      </td>
    <?php if ($this->_tpl_vars['logged_user']->canSeePrivate()): ?>
      <td class="private">
      <?php if ($this->_tpl_vars['document']->getVisibility() == VISIBILITY_PRIVATE): ?>
        <img src="<?php echo smarty_function_image_url(array('name' => "private.gif"), $this);?>
" title="<?php $this->_tag_stack[] = array('lang', array('company_name' => $this->_tpl_vars['owner_company']->getName())); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This document is visible only to members of :company_name company<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" />
      <?php endif; ?>
      </td>
    <?php endif; ?>
    </tr>
  <?php endforeach; endif; unset($_from); ?>
  </table>
  <div class="clear"></div>
  
  <?php if (( $this->_tpl_vars['pagination']->getLastPage() > 1 ) && ! $this->_tpl_vars['pagination']->isLast()): ?>
    <?php if ($this->_tpl_vars['active_document_category']->isLoaded()): ?>
      <p class="next_page"><a href="<?php echo $this->_tpl_vars['active_document_category']->getViewUrl($this->_tpl_vars['pagination']->getNextPage()); ?>
"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Next Page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></p>
    <?php else: ?>
      <p class="next_page"><a href="<?php echo smarty_function_assemble(array('route' => 'documents','page' => $this->_tpl_vars['pagination']->getNextPage()), $this);?>
"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Next Page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></p>
    <?php endif; ?>
  <?php endif;  elseif ($this->_tpl_vars['add_text_url'] || $this->_tpl_vars['upload_file_url']): ?>
    <p class="empty_page"><?php $this->_tag_stack[] = array('lang', array('add_text_url' => $this->_tpl_vars['add_text_url'],'upload_file_url' => $this->_tpl_vars['upload_file_url'])); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No documents here. Would you like to <a href=":add_text_url">create a text document</a> or <a href=":upload_file_url">upload a file</a>?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    <?php echo smarty_function_empty_slate(array('name' => 'documents','module' => 'documents'), $this);?>

<?php else: ?>
  	<p class="empty_page"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Sorry, no documents here<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
<?php endif; ?>
	</div>

  <ul class="category_list document_category_list">
    <li <?php if ($this->_tpl_vars['active_document_category']->isNew()): ?>class="selected"<?php endif; ?>><a href="<?php echo smarty_function_assemble(array('route' => 'documents'), $this);?>
"><span><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>All Documents<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a></li>
    <?php if (is_foreachable ( $this->_tpl_vars['categories'] )): ?>
		  <?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
      	<?php if ($this->_tpl_vars['category']->canView($this->_tpl_vars['logged_user'])): ?>
		    	<li document_category_id="<?php echo $this->_tpl_vars['category']->getId(); ?>
" <?php if ($this->_tpl_vars['active_document_category']->isLoaded() && $this->_tpl_vars['active_document_category']->getId() == $this->_tpl_vars['category']->getId()): ?>class="selected"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['category']->getViewUrl(); ?>
"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['category']->getName())) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
</span></a></li>
		    <?php endif; ?>
		  <?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
	  <?php if ($this->_tpl_vars['document_categories_url']): ?>
	    <li id="manage_document_categories"><a href="<?php echo $this->_tpl_vars['document_categories_url']; ?>
"><span><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Manage Categories<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a></li>
	  <?php endif; ?>
  </ul>
  <?php if ($this->_tpl_vars['document_categories_url']): ?>
  <script type="text/javascript">
    App.system.ManageDocumentCategories.init('manage_document_categories');
  </script>
  <?php endif; ?>
  
  <div class="clear"></div>
</div>