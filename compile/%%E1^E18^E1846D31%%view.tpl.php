<?php /* Smarty version 2.6.16, created on 2011-07-11 22:19:32
         compiled from /home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'page_object', '/home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/view.tpl', 1, false),array('function', 'action_on_by', '/home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/view.tpl', 3, false),array('function', 'object_quick_options', '/home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/view.tpl', 9, false),array('function', 'milestone_link', '/home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/view.tpl', 22, false),array('function', 'object_tags', '/home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/view.tpl', 26, false),array('function', 'list_subpages', '/home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/view.tpl', 34, false),array('function', 'page_versions', '/home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/view.tpl', 35, false),array('function', 'object_tasks', '/home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/view.tpl', 36, false),array('function', 'object_subscriptions', '/home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/view.tpl', 37, false),array('function', 'object_attachments', '/home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/view.tpl', 38, false),array('function', 'object_comments', '/home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/view.tpl', 48, false),array('block', 'details', '/home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/view.tpl', 3, false),array('block', 'lang', '/home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/view.tpl', 3, false),array('block', 'add_bread_crumb', '/home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/view.tpl', 7, false),array('block', 'pagination', '/home/mensajes/public_html/gestion/activecollab/application/modules/pages/views/pages/view.tpl', 43, false),)), $this); ?>
<?php echo smarty_function_page_object(array('object' => $this->_tpl_vars['active_page']), $this);?>

<?php if ($this->_tpl_vars['active_page']->getRevisionNum() > 1): ?>
  <?php $this->_tag_stack[] = array('details', array()); $_block_repeat=true;smarty_block_details($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  $this->_tag_stack[] = array('lang', array('version' => $this->_tpl_vars['active_page']->getRevisionNum())); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Version #:version<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>. <?php echo smarty_function_action_on_by(array('user' => $this->_tpl_vars['active_page']->getUpdatedBy(),'datetime' => $this->_tpl_vars['active_page']->getUpdatedOn(),'action' => 'Last time updated'), $this); $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_details($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  else: ?>
  <?php $this->_tag_stack[] = array('details', array()); $_block_repeat=true;smarty_block_details($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  $this->_tag_stack[] = array('lang', array('version' => $this->_tpl_vars['active_page']->getRevisionNum())); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Version #:version<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>. <?php echo smarty_function_action_on_by(array('user' => $this->_tpl_vars['active_page']->getCreatedBy(),'datetime' => $this->_tpl_vars['active_page']->getCreatedOn(),'action' => 'Created'), $this); $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_details($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  endif;  $this->_tag_stack[] = array('add_bread_crumb', array()); $_block_repeat=true;smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Latest Version<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php echo smarty_function_object_quick_options(array('object' => $this->_tpl_vars['active_page'],'user' => $this->_tpl_vars['logged_user']), $this);?>

<div class="page main_object" id="page<?php echo $this->_tpl_vars['active_page']->getId(); ?>
">
  <div class="body">
    <dl class="properties">
      <dt><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dt>
    <?php if ($this->_tpl_vars['active_page']->getIsArchived()): ?>
      <dd><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Archived<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
    <?php else: ?>
      <dd><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Active<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
    <?php endif; ?>
  
    <?php if ($this->_tpl_vars['logged_user']->canSeeMilestones($this->_tpl_vars['active_project']) && $this->_tpl_vars['active_page']->getMilestoneId()): ?>
      <dt><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Milestone<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dt>
      <dd><?php echo smarty_function_milestone_link(array('object' => $this->_tpl_vars['active_page']), $this);?>
</dd>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['active_page']->hasTags()): ?>
      <dt><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tags<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dt>
      <dd><?php echo smarty_function_object_tags(array('object' => $this->_tpl_vars['active_page']), $this);?>
</dd>
    <?php endif; ?>
    </dl>
    
    <div class="body content"><?php echo $this->_tpl_vars['active_page']->getFormattedBody(); ?>
</div>
  </div>
  
  <div class="resources">
    <?php echo smarty_function_list_subpages(array('parent' => $this->_tpl_vars['active_page'],'subpages' => $this->_tpl_vars['subpages']), $this);?>

    <?php echo smarty_function_page_versions(array('page' => $this->_tpl_vars['active_page'],'versions' => $this->_tpl_vars['versions']), $this);?>

    <?php echo smarty_function_object_tasks(array('object' => $this->_tpl_vars['active_page']), $this);?>

    <?php echo smarty_function_object_subscriptions(array('object' => $this->_tpl_vars['active_page']), $this);?>

    <?php echo smarty_function_object_attachments(array('object' => $this->_tpl_vars['active_page']), $this);?>

    
    <div class="resource object_comments" id="comments">
      <div class="body">
      <?php if ($this->_tpl_vars['pagination']->getLastPage() > 1): ?>
        <p class="pagination top"><span class="inner_pagination"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php $this->_tag_stack[] = array('pagination', array('pager' => $this->_tpl_vars['pagination'])); $_block_repeat=true;smarty_block_pagination($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo $this->_tpl_vars['active_page']->getViewUrl('-PAGE-');  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_pagination($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></p>
        <div class="clear"></div>
        <?php endif; ?>
        
        <?php if ($this->_tpl_vars['pagination']->getLastPage() > $this->_tpl_vars['pagination']->getCurrentPage()): ?>
          <?php echo smarty_function_object_comments(array('object' => $this->_tpl_vars['active_page'],'comments' => $this->_tpl_vars['comments'],'show_header' => false,'count_from' => $this->_tpl_vars['count_start'],'next_page' => $this->_tpl_vars['active_page']->getViewUrl($this->_tpl_vars['pagination']->getNextPage())), $this);?>

        <?php else: ?>
          <?php echo smarty_function_object_comments(array('object' => $this->_tpl_vars['active_page'],'comments' => $this->_tpl_vars['comments'],'show_header' => false,'count_from' => $this->_tpl_vars['count_start']), $this);?>

        <?php endif; ?>
      </div>
    </div>
  </div>
</div>