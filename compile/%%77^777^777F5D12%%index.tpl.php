<?php /* Smarty version 2.6.16, created on 2011-07-06 17:09:55
         compiled from /home/mensajes/public_html/gestion/activecollab/application/modules/checklists/views/checklists/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'title', '/home/mensajes/public_html/gestion/activecollab/application/modules/checklists/views/checklists/index.tpl', 1, false),array('block', 'add_bread_crumb', '/home/mensajes/public_html/gestion/activecollab/application/modules/checklists/views/checklists/index.tpl', 2, false),array('block', 'lang', '/home/mensajes/public_html/gestion/activecollab/application/modules/checklists/views/checklists/index.tpl', 14, false),array('block', 'link', '/home/mensajes/public_html/gestion/activecollab/application/modules/checklists/views/checklists/index.tpl', 27, false),array('function', 'object_star', '/home/mensajes/public_html/gestion/activecollab/application/modules/checklists/views/checklists/index.tpl', 11, false),array('function', 'image', '/home/mensajes/public_html/gestion/activecollab/application/modules/checklists/views/checklists/index.tpl', 12, false),array('function', 'object_link', '/home/mensajes/public_html/gestion/activecollab/application/modules/checklists/views/checklists/index.tpl', 13, false),array('function', 'object_visibility', '/home/mensajes/public_html/gestion/activecollab/application/modules/checklists/views/checklists/index.tpl', 15, false),array('function', 'empty_slate', '/home/mensajes/public_html/gestion/activecollab/application/modules/checklists/views/checklists/index.tpl', 24, false),)), $this); ?>
<?php $this->_tag_stack[] = array('title', array()); $_block_repeat=true;smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Active Checklists<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $this->_tag_stack[] = array('add_bread_crumb', array()); $_block_repeat=true;smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Active<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<div id="checklists">
  <?php if (is_foreachable ( $this->_tpl_vars['checklists'] )): ?>
    <div class="checklists_container">
    <?php $_from = $this->_tpl_vars['checklists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['checklist']):
?>
      <div class="checklist even" id="checklist_<?php echo $this->_tpl_vars['checklist']->getId(); ?>
" checklist_id="<?php echo $this->_tpl_vars['checklist']->getId(); ?>
">
        <table class="checklists_table">
          <tr>
            <td class="star"><?php echo smarty_function_object_star(array('object' => $this->_tpl_vars['checklist'],'user' => $this->_tpl_vars['logged_user']), $this);?>
</td>
            <td class="star expander"><a href="<?php echo $this->_tpl_vars['checklist']->getViewUrl(); ?>
" class="collapsed"><?php echo smarty_function_image(array('name' => "expand_collapsed.gif"), $this);?>
</a></td>
            <td><?php echo smarty_function_object_link(array('object' => $this->_tpl_vars['checklist']), $this);?>
</td>
            <td class="stats"><span style="display: none;"><?php $this->_tag_stack[] = array('lang', array('open_count' => $this->_tpl_vars['checklist']->countOpenTasks(),'total_count' => $this->_tpl_vars['checklist']->countTasks())); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>:open_count open tasks of :total_count tasks in list<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
            <td class="visibility"><?php echo smarty_function_object_visibility(array('object' => $this->_tpl_vars['checklist'],'user' => $this->_tpl_vars['logged_user']), $this);?>
</td>
          </tr>
        </table>
        <div class="tasks_container"></div>
      </div>
    <?php endforeach; endif; unset($_from); ?>
    </div> 
  <?php else: ?>
    <p class="empty_page"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There are no active checklists here<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>. <?php if ($this->_tpl_vars['add_checklist_url']):  $this->_tag_stack[] = array('lang', array('add_url' => $this->_tpl_vars['add_checklist_url'])); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Would you like to <a href=":add_url">create one</a><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>?<?php endif; ?></p>
    <?php echo smarty_function_empty_slate(array('name' => 'checklists','module' => 'checklists'), $this);?>

  <?php endif; ?>
  
  <p class="archive_link"><?php $this->_tag_stack[] = array('link', array('href' => $this->_tpl_vars['checklists_archive_url'])); $_block_repeat=true;smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Archive<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
</div>