<?php /* Smarty version 2.6.16, created on 2011-07-18 23:26:00
         compiled from /home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/messages.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'title', '/home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/messages.tpl', 2, false),array('block', 'add_bread_crumb', '/home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/messages.tpl', 3, false),array('block', 'lang', '/home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/messages.tpl', 12, false),array('block', 'pagination', '/home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/messages.tpl', 36, false),array('block', 'link', '/home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/messages.tpl', 66, false),array('function', 'assemble', '/home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/messages.tpl', 14, false),array('function', 'image_url', '/home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/messages.tpl', 28, false),array('function', 'include_template', '/home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/messages.tpl', 47, false),)), $this); ?>
<?php if ($this->_tpl_vars['selected_user']): ?>
  <?php $this->_tag_stack[] = array('title', array('name' => $this->_tpl_vars['selected_user']->getDisplayName())); $_block_repeat=true;smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>:name's Status Archive<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php $this->_tag_stack[] = array('add_bread_crumb', array()); $_block_repeat=true;smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Archive<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  else: ?>
  <?php $this->_tag_stack[] = array('title', array()); $_block_repeat=true;smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Status Archive<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php $this->_tag_stack[] = array('add_bread_crumb', array()); $_block_repeat=true;smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Archive<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  endif; ?>


<div id="status_updates_archive">
  <div class="filter_style dont_print">
    <?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>User<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: 
    <select name="user" id="select_user">
      <option value="<?php echo smarty_function_assemble(array('route' => 'status_updates'), $this);?>
">--<?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>All users<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>--</option>
      <?php if (is_foreachable ( $this->_tpl_vars['visible_users'] )): ?>
        <?php $_from = $this->_tpl_vars['visible_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['company_name'] => $this->_tpl_vars['company_users']):
?>
          <?php if (is_foreachable ( $this->_tpl_vars['company_users'] )): ?>
          <optgroup label="<?php echo $this->_tpl_vars['company_name']; ?>
">
            <?php $_from = $this->_tpl_vars['company_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
              <option value="<?php echo smarty_function_assemble(array('route' => 'status_updates','user_id' => $this->_tpl_vars['user']['id']), $this);?>
"<?php if (( $this->_tpl_vars['selected_user'] ) && ( $this->_tpl_vars['selected_user']->getId() == $this->_tpl_vars['user']['id'] )): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['user']['display_name']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
          </optgroup>
          <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
      <?php endif; ?>
    </select>
    
    <img src="<?php echo smarty_function_image_url(array('name' => "indicator.gif"), $this);?>
" alt="Working" id="status_update_archive_work_indicator" style="display: none"/>
  </div>
  
    <?php if (is_foreachable ( $this->_tpl_vars['status_updates'] )): ?>
      <?php if ($this->_tpl_vars['pagination']->getLastPage() > 1): ?>
        <p class="pagination top">
          <span class="inner_pagination">
          <?php if ($this->_tpl_vars['selected_user']): ?>
            <?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php $this->_tag_stack[] = array('pagination', array('pager' => $this->_tpl_vars['pagination'])); $_block_repeat=true;smarty_block_pagination($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo smarty_function_assemble(array('route' => 'status_updates','user_id' => $this->_tpl_vars['selected_user']->getId(),'page' => '-PAGE-'), $this); $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_pagination($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php else: ?>
            <?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php $this->_tag_stack[] = array('pagination', array('pager' => $this->_tpl_vars['pagination'])); $_block_repeat=true;smarty_block_pagination($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo smarty_function_assemble(array('route' => 'status_updates','page' => '-PAGE-'), $this); $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_pagination($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php endif; ?>
          </span>
        </p>
        <div class="clear"></div>
      <?php endif; ?>
      
      <table class="common_table status_updates_table archive_updates_table">
        <?php $_from = $this->_tpl_vars['status_updates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['status_update']):
?>
          <?php echo smarty_function_include_template(array('name' => '_status_row','controller' => 'status','module' => 'status'), $this);?>

        <?php endforeach; endif; unset($_from); ?>
      </table>
      
      <?php if ($this->_tpl_vars['pagination']->getLastPage() > 1 && ! $this->_tpl_vars['pagination']->isLast()): ?>
        <?php if ($this->_tpl_vars['selected_user']): ?>
          <p class="next_page"><a href="<?php echo smarty_function_assemble(array('route' => 'status_updates','user_id' => $this->_tpl_vars['selected_user']->getId(),'page' => $this->_tpl_vars['pagination']->getNextPage()), $this);?>
"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Next Page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></p>
        <?php else: ?>
          <p class="next_page"><a href="<?php echo smarty_function_assemble(array('route' => 'status_updates','page' => $this->_tpl_vars['pagination']->getNextPage()), $this);?>
"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Next Page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></p>
        <?php endif; ?>
      <?php endif; ?>
    <?php else: ?>
      <?php if ($this->_tpl_vars['selected_user']): ?>
        <p class="empty_page"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>User has no status updates<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
      <?php else: ?>
        <p class="empty_page"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No status messages logged<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
      <?php endif; ?>
    <?php endif; ?>
    
    <p class="recent_activities_rss"><?php $this->_tag_stack[] = array('link', array('href' => $this->_tpl_vars['rss_url'])); $_block_repeat=true;smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Track using RSS<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_link($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
</div>