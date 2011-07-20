<?php /* Smarty version 2.6.16, created on 2011-07-05 23:40:59
         compiled from C:%5Cwamp%5Cwww%5Cproject%5Cactivecollab/application/modules/system/views/languages_admin/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'title', 'C:\\wamp\\www\\project\\activecollab/application/modules/system/views/languages_admin/view.tpl', 1, false),array('block', 'add_bread_crumb', 'C:\\wamp\\www\\project\\activecollab/application/modules/system/views/languages_admin/view.tpl', 2, false),array('block', 'lang', 'C:\\wamp\\www\\project\\activecollab/application/modules/system/views/languages_admin/view.tpl', 6, false),array('block', 'link', 'C:\\wamp\\www\\project\\activecollab/application/modules/system/views/languages_admin/view.tpl', 23, false),array('block', 'form', 'C:\\wamp\\www\\project\\activecollab/application/modules/system/views/languages_admin/view.tpl', 39, false),array('block', 'wrap', 'C:\\wamp\\www\\project\\activecollab/application/modules/system/views/languages_admin/view.tpl', 40, false),array('block', 'label', 'C:\\wamp\\www\\project\\activecollab/application/modules/system/views/languages_admin/view.tpl', 41, false),array('block', 'wrap_buttons', 'C:\\wamp\\www\\project\\activecollab/application/modules/system/views/languages_admin/view.tpl', 49, false),array('block', 'submit', 'C:\\wamp\\www\\project\\activecollab/application/modules/system/views/languages_admin/view.tpl', 50, false),array('modifier', 'clean', 'C:\\wamp\\www\\project\\activecollab/application/modules/system/views/languages_admin/view.tpl', 7, false),array('function', 'cycle', 'C:\\wamp\\www\\project\\activecollab/application/modules/system/views/languages_admin/view.tpl', 19, false),array('function', 'image_url', 'C:\\wamp\\www\\project\\activecollab/application/modules/system/views/languages_admin/view.tpl', 23, false),)), $this); ?>
<?php $this->_tag_stack[] = array('title', array('not_lang' => true)); $_block_repeat=true;smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo $this->_tpl_vars['active_language']->getName();  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $this->_tag_stack[] = array('add_bread_crumb', array()); $_block_repeat=true;smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>View<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<div id="language">
  <dl id="language_details">
    <dt><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dt>
    <dd><?php echo ((is_array($_tmp=$this->_tpl_vars['active_language']->getName())) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
</dd>
    
    <dt><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Locale<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dt>
    <dd><?php echo ((is_array($_tmp=$this->_tpl_vars['active_language']->getLocale())) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
</dd>
  </dl>
  
  <div id="translation_files">
    <h2 class="section_name"><span class="section_name_span"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Translation Files<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></h2>
    <div class="section_container">
    <?php if (is_foreachable ( $this->_tpl_vars['translation_files'] )): ?>
      <table>
      <?php $_from = $this->_tpl_vars['translation_files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['translation_file']):
?>
        <tr class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
          <td class="name"><?php echo ((is_array($_tmp=$this->_tpl_vars['translation_file'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
</td>
          <td class="options">
          <?php if ($this->_tpl_vars['active_language']->isEditable($this->_tpl_vars['translation_file'])): ?>
            <?php $this->_tag_stack[] = array('link', array('href' => $this->_tpl_vars['active_language']->getEditTranslationFileUrl($this->_tpl_vars['translation_file']))); $_block_repeat=true;smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><img src="<?php echo smarty_function_image_url(array('name' => "gray-edit.gif"), $this);?>
" alt="" /><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php else: ?>
            <span class="details"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Not Editable<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
          <?php endif; ?>
          </td>
        </tr>
      <?php endforeach; endif; unset($_from); ?>
      </table>
    <?php else: ?>
      <p><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There are no translation files defined for this language<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    <?php endif; ?>
    </div>
    
    <?php if (is_foreachable ( $this->_tpl_vars['dictionaries'] )): ?>
    <h2 class="section_name"><span class="section_name_span"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Translation File<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></h2>
    <div class="section_container">
      <?php $this->_tag_stack[] = array('form', array('action' => $this->_tpl_vars['active_language']->getAddTranslationFileUrl(),'method' => 'post')); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <?php $this->_tag_stack[] = array('wrap', array('field' => 'dictionary')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
          <?php $this->_tag_stack[] = array('label', array('for' => 'select_dictionary','required' => true)); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Dictionary<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <select name="dictionary" id="select_dictionary">
          <?php $_from = $this->_tpl_vars['dictionaries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dictionary']):
?>
            <option><?php echo ((is_array($_tmp=$this->_tpl_vars['dictionary'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
</option>
          <?php endforeach; endif; unset($_from); ?>
          </select>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      
        <?php $this->_tag_stack[] = array('wrap_buttons', array()); $_block_repeat=true;smarty_block_wrap_buttons($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
          <?php $this->_tag_stack[] = array('submit', array()); $_block_repeat=true;smarty_block_submit($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Submit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_submit($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap_buttons($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
    <?php endif; ?>
  </div>
</div>