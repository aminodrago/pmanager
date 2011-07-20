<?php /* Smarty version 2.6.16, created on 2011-07-06 20:58:38
         compiled from /home/mensajes/public_html/gestion/activecollab/application/modules/system/views/widgets/image_picker.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'lang', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/widgets/image_picker.tpl', 4, false),array('block', 'form', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/widgets/image_picker.tpl', 12, false),array('block', 'wrap', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/widgets/image_picker.tpl', 14, false),array('block', 'label', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/widgets/image_picker.tpl', 15, false),array('block', 'wrap_buttons', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/widgets/image_picker.tpl', 21, false),array('block', 'submit', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/widgets/image_picker.tpl', 22, false),array('function', 'file_field', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/widgets/image_picker.tpl', 16, false),array('function', 'text_field', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/widgets/image_picker.tpl', 32, false),)), $this); ?>
<div id="editor_picker_dialog">
  <ul class="top_tabs">
  <?php if (! $this->_tpl_vars['disable_upload']): ?>
    <li class="selected"><a href="#" id="tab_upload_image"><span><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Upload Image<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a></li>
  <?php endif; ?>
    <li><a href="#" id="tab_link_image" class="<?php if ($this->_tpl_vars['disable_upload']): ?>selected<?php endif; ?>"><span><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Link Existing<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a></li>
  </ul>
  
  <div class="top_tabs_object_list dialog_tabs_content">
    <?php if (! $this->_tpl_vars['disable_upload']): ?>
    <div id="container_tab_upload_image">
      <?php $this->_tag_stack[] = array('form', array('enctype' => "multipart/form-data",'action' => ($this->_tpl_vars['image_picker_url']),'method' => 'post','id' => 'upload_image_form')); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
      
        <?php $this->_tag_stack[] = array('wrap', array('field' => 'image')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
          <?php $this->_tag_stack[] = array('label', array('for' => 'image','required' => true)); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php echo smarty_function_file_field(array('name' => 'image','id' => 'image','class' => 'title required'), $this);?>

        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
               
        <input type="hidden" value="upload" name="widget_action"/>
          
        <?php $this->_tag_stack[] = array('wrap_buttons', array()); $_block_repeat=true;smarty_block_wrap_buttons($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
          <?php $this->_tag_stack[] = array('submit', array()); $_block_repeat=true;smarty_block_submit($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Upload and Insert<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_submit($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap_buttons($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
    <?php endif; ?>
    
    <div id="container_tab_link_image">
      <?php $this->_tag_stack[] = array('form', array('enctype' => "multipart/form-data",'action' => ($this->_tpl_vars['image_picker_url']),'method' => 'post','id' => 'link_image_form')); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <?php $this->_tag_stack[] = array('wrap', array('field' => 'image')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
          <?php $this->_tag_stack[] = array('label', array('for' => 'image','required' => true)); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Image URL<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php echo smarty_function_text_field(array('name' => 'image','id' => 'image','class' => 'title required'), $this);?>

        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        
        <?php $this->_tag_stack[] = array('wrap_buttons', array()); $_block_repeat=true;smarty_block_wrap_buttons($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
          <?php $this->_tag_stack[] = array('submit', array()); $_block_repeat=true;smarty_block_submit($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Insert Image<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_submit($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap_buttons($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>      
      <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
  </div>
</div>

<script type="text/javascript">
  App.widgets.EditorImagePicker.init('#editor_picker_dialog');
</script>