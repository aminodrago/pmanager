<?php /* Smarty version 2.6.16, created on 2011-07-11 22:19:32
         compiled from /home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/_subpages.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'lang', '/home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/_subpages.tpl', 4, false),array('function', 'pages_tree', '/home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/_subpages.tpl', 7, false),)), $this); ?>
<?php if (is_foreachable ( $this->_tpl_vars['_subpages'] )): ?>
<div class="resource object_subpages object_section">
  <div class="head">
    <h2 class="section_name"><span class="section_name_span"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Subpages<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></h2>
  </div>
  <div class="body">
    <?php echo smarty_function_pages_tree(array('pages' => $this->_tpl_vars['_subpages'],'user' => $this->_tpl_vars['logged_user'],'show_visibility' => false), $this);?>

  </div>
</div>
<?php endif; ?>