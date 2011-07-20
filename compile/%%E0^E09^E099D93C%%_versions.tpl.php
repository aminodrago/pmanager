<?php /* Smarty version 2.6.16, created on 2011-07-11 22:19:32
         compiled from /home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/_versions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'lang', '/home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/_versions.tpl', 5, false),array('block', 'link', '/home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/_versions.tpl', 7, false),array('function', 'cycle', '/home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/_versions.tpl', 18, false),array('function', 'action_on_by', '/home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/_versions.tpl', 20, false),array('function', 'image_url', '/home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/_versions.tpl', 23, false),)), $this); ?>
<?php if (is_foreachable ( $this->_tpl_vars['_versions'] )): ?>
<div class="resource object_revisions object_section">
  <div class="head">
    <h2 class="section_name"><span class="section_name_span">
      <span class="section_name_span_span"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Older Versions<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      <ul class="section_options">
        <li><?php $this->_tag_stack[] = array('link', array('href' => $this->_tpl_vars['_versions_page']->getCompareVersionsUrl())); $_block_repeat=true;smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Compare Versions<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
      </ul>
      <div class="clear"></div>
    </span></h2>
  </div>
  
  
  <div class="body">
    <table class="revisions_table">
      <tbody>
      <?php $_from = $this->_tpl_vars['_versions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_version']):
?>
        <tr class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
          <td class="revision_num"><a href="<?php echo $this->_tpl_vars['_version']->getViewUrl(); ?>
">#<?php echo $this->_tpl_vars['_version']->getVersion(); ?>
</a></td>
          <td class="author"><?php echo smarty_function_action_on_by(array('user' => $this->_tpl_vars['_version']->getCreatedBy(),'datetime' => $this->_tpl_vars['_version']->getCreatedOn()), $this);?>
</td>
          <td class="options">
          <?php if ($this->_tpl_vars['_versions_page']->canEdit($this->_tpl_vars['logged_user'])): ?>
            <?php $this->_tag_stack[] = array('link', array('href' => $this->_tpl_vars['_versions_page']->getRevertUrl($this->_tpl_vars['_version']),'title' => 'Revert to this version','confirm' => 'Are you sure that you want to revert back to this version?','method' => 'post')); $_block_repeat=true;smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><img src="<?php echo smarty_function_image_url(array('name' => "revert-gray.gif",'module' => 'pages'), $this);?>
" alt="" /><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php endif; ?>
          <?php if ($this->_tpl_vars['_version']->canDelete($this->_tpl_vars['logged_user'])): ?>
            <?php $this->_tag_stack[] = array('link', array('href' => $this->_tpl_vars['_version']->getDeleteUrl(),'title' => 'Permanently delete version','class' => 'remove_revision')); $_block_repeat=true;smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><img src="<?php echo smarty_function_image_url(array('name' => "gray-delete.gif"), $this);?>
" alt="" /><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php endif; ?>
          </td>
        </tr>
      <?php endforeach; endif; unset($_from); ?>
      </tbody>
    </table>
  </div>
</div>
<?php endif; ?>