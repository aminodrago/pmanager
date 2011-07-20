<?php /* Smarty version 2.6.16, created on 2011-07-06 17:17:18
         compiled from /home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/popup.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'title', '/home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/popup.tpl', 1, false),array('block', 'add_bread_crumb', '/home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/popup.tpl', 2, false),array('block', 'lang', '/home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/popup.tpl', 7, false),array('block', 'form', '/home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/popup.tpl', 25, false),array('block', 'label', '/home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/popup.tpl', 26, false),array('function', 'assemble', '/home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/popup.tpl', 7, false),array('function', 'image_url', '/home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/popup.tpl', 7, false),array('function', 'include_template', '/home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/popup.tpl', 17, false),array('function', 'text_field', '/home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/popup.tpl', 27, false),)), $this); ?>
<?php $this->_tag_stack[] = array('title', array()); $_block_repeat=true;smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $this->_tag_stack[] = array('add_bread_crumb', array()); $_block_repeat=true;smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<div id="status_updates_dialog">   
  <ul class="status_update_top_links">
    <li class="first"></li>
    <li><a href="<?php echo smarty_function_assemble(array('route' => 'status_updates'), $this);?>
" title="<?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Browse Archive<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><img src="<?php echo smarty_function_image_url(array('name' => "archive.gif"), $this);?>
" alt="" /></a></li>
    <li><a href="<?php echo $this->_tpl_vars['rss_url']; ?>
" title="<?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Track Using RSS<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><img src="<?php echo smarty_function_image_url(array('name' => "rss.gif"), $this);?>
" alt="" /></a></li>
  </ul>
  <p class="dialog_title"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Recent Messages<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>

  <div class="table_wrapper">
    <table class="common_table status_updates_table" id="status_updates_table">
      <tbody>
      <?php if (is_foreachable ( $this->_tpl_vars['status_updates'] )): ?>
        <?php $_from = $this->_tpl_vars['status_updates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['status_update']):
?>
          <?php echo smarty_function_include_template(array('name' => '_status_row','controller' => 'status','module' => 'status'), $this);?>

        <?php endforeach; endif; unset($_from); ?>
      <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>
 
<?php $this->_tag_stack[] = array('form', array('action' => $this->_tpl_vars['add_status_message_url'],'method' => 'post','id' => 'update_status_form')); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
  <?php $this->_tag_stack[] = array('label', array()); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>What are you doing?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php echo smarty_function_text_field(array('name' => 'status','maxlength' => 255), $this);?>

  <img src="<?php echo smarty_function_image_url(array('name' => "dialog_submit.gif",'module' => 'status'), $this);?>
" alt="s" id="status_update_button"/>
  <img src="<?php echo smarty_function_image_url(array('name' => "indicator.gif"), $this);?>
" alt="Working" id="status_update_indicator" style="display: none" />
  <script type="text/javascript">
    App.widgets.status_update_dialog.init();
  </script>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>