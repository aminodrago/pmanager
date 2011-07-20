<?php /* Smarty version 2.6.16, created on 2011-07-06 17:24:25
         compiled from /home/mensajes/public_html/gestion/activecollab/application/modules/source/views/source_admin/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'title', '/home/mensajes/public_html/gestion/activecollab/application/modules/source/views/source_admin/index.tpl', 1, false),array('block', 'form', '/home/mensajes/public_html/gestion/activecollab/application/modules/source/views/source_admin/index.tpl', 4, false),array('block', 'wrap', '/home/mensajes/public_html/gestion/activecollab/application/modules/source/views/source_admin/index.tpl', 6, false),array('block', 'label', '/home/mensajes/public_html/gestion/activecollab/application/modules/source/views/source_admin/index.tpl', 7, false),array('block', 'lang', '/home/mensajes/public_html/gestion/activecollab/application/modules/source/views/source_admin/index.tpl', 15, false),array('block', 'wrap_buttons', '/home/mensajes/public_html/gestion/activecollab/application/modules/source/views/source_admin/index.tpl', 32, false),array('block', 'submit', '/home/mensajes/public_html/gestion/activecollab/application/modules/source/views/source_admin/index.tpl', 33, false),array('function', 'text_field', '/home/mensajes/public_html/gestion/activecollab/application/modules/source/views/source_admin/index.tpl', 8, false),)), $this); ?>
<?php $this->_tag_stack[] = array('title', array()); $_block_repeat=true;smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Source Settings<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

  <div class="section_container">
    <?php $this->_tag_stack[] = array('form', array('action' => $this->_tpl_vars['backup_admin_url'],'method' => 'POST')); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
      <div class="col_wide">
        <?php $this->_tag_stack[] = array('wrap', array('field' => 'svn_path')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
          <?php $this->_tag_stack[] = array('label', array('for' => 'svn_path','required' => false)); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>SVN Location<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php echo smarty_function_text_field(array('id' => 'svn_path','name' => "source[svn_path]",'value' => $this->_tpl_vars['source_data']['svn_path']), $this);?>

          <p class="details">Enter path for subversion executable (without executable name)</p>         
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div>
      
      <div class="col_wide">
        <div class="admin_test_setting" id="check_svn_path">
          <button type="button"><span><span><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check SVN Path<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></span></button>
          <span class="test_results">
            <span></span>
          </span>
        </div>
      </div>

      <div class="clear"></div>
      
      <div class="col_wide">
        <?php $this->_tag_stack[] = array('wrap', array('field' => 'svn_config_dir')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
          <?php $this->_tag_stack[] = array('label', array('for' => 'svn_config_dir','required' => false)); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>SVN Config Directory Path<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php echo smarty_function_text_field(array('id' => 'svn_config_dir','name' => "source[svn_config_dir]",'value' => $this->_tpl_vars['source_data']['svn_config_dir']), $this);?>

          <p class="details"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Leave empty to use system default<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div>
      
      <?php $this->_tag_stack[] = array('wrap_buttons', array()); $_block_repeat=true;smarty_block_wrap_buttons($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <?php $this->_tag_stack[] = array('submit', array()); $_block_repeat=true;smarty_block_submit($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Submit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_submit($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap_buttons($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>