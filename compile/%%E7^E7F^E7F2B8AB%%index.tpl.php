<?php /* Smarty version 2.6.16, created on 2011-07-06 17:24:13
         compiled from /home/mensajes/public_html/gestion/activecollab/application/modules/source/views/repository/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'title', '/home/mensajes/public_html/gestion/activecollab/application/modules/source/views/repository/index.tpl', 1, false),array('block', 'add_bread_crumb', '/home/mensajes/public_html/gestion/activecollab/application/modules/source/views/repository/index.tpl', 2, false),array('block', 'lang', '/home/mensajes/public_html/gestion/activecollab/application/modules/source/views/repository/index.tpl', 2, false),array('function', 'cycle', '/home/mensajes/public_html/gestion/activecollab/application/modules/source/views/repository/index.tpl', 16, false),array('function', 'object_star', '/home/mensajes/public_html/gestion/activecollab/application/modules/source/views/repository/index.tpl', 17, false),array('function', 'object_link', '/home/mensajes/public_html/gestion/activecollab/application/modules/source/views/repository/index.tpl', 19, false),array('function', 'object_subscription', '/home/mensajes/public_html/gestion/activecollab/application/modules/source/views/repository/index.tpl', 53, false),array('function', 'object_visibility', '/home/mensajes/public_html/gestion/activecollab/application/modules/source/views/repository/index.tpl', 54, false),array('modifier', 'clean', '/home/mensajes/public_html/gestion/activecollab/application/modules/source/views/repository/index.tpl', 21, false),array('modifier', 'date', '/home/mensajes/public_html/gestion/activecollab/application/modules/source/views/repository/index.tpl', 36, false),)), $this); ?>
<?php $this->_tag_stack[] = array('title', array()); $_block_repeat=true;smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Source Version Control<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $this->_tag_stack[] = array('add_bread_crumb', array()); $_block_repeat=true;smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Repositories<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

  <div id="repository_index" class="repository_listing">
  <?php if (is_foreachable ( $this->_tpl_vars['repositories'] )): ?>
    <table>
      <tr>
        <th></th>
        <th><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Repository Name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th class="revision"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Head<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th class="last_commit"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Last Commit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th class="graph"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Activity Graph<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th></th>
      </tr>
    <?php $_from = $this->_tpl_vars['repositories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['repository']):
?>
      <tr class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
        <td class="star"><?php echo smarty_function_object_star(array('object' => $this->_tpl_vars['repository'],'user' => $this->_tpl_vars['logged_user']), $this);?>
</td>
        <td class="name">
          <strong><?php echo smarty_function_object_link(array('object' => $this->_tpl_vars['repository']), $this);?>
</strong>
          <span class="block details">
             <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['repository']->getUrl())) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['repository']->getUrl())) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
</a>
           </span>
        </td>
        <td class="revision">
          <?php if (! instance_of ( $this->_tpl_vars['repository']->last_commit , 'Commit' )): ?>
            -
          <?php else: ?>
            <a href="<?php echo $this->_tpl_vars['repository']->last_commit->getViewUrl(); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['repository']->last_commit->getRevision())) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
</a>
          <?php endif; ?>
        </td>
        <td class="last_commit">
          <?php if (! instance_of ( $this->_tpl_vars['repository']->last_commit , 'Commit' )): ?>
            -
          <?php else: ?>
            <?php echo $this->_tpl_vars['repository']->last_commit->getAuthor(); ?>
<br />
            <?php echo ((is_array($_tmp=$this->_tpl_vars['repository']->last_commit->getCreatedOn())) ? $this->_run_mod_handler('date', true, $_tmp) : smarty_modifier_date($_tmp)); ?>

          <?php endif; ?>          
        </td>
        <td class="graph">
        <?php $this->assign('activity', $this->_tpl_vars['repository']->getRecentActivity()); ?>
        <?php if (is_foreachable ( $this->_tpl_vars['activity'] )): ?>
          <ul class="timeline">
          <?php $_from = $this->_tpl_vars['activity']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
            <li>
              <a href="#" title="<?php $this->_tag_stack[] = array('lang', array('commits' => $this->_tpl_vars['item']['commits'],'day' => $this->_tpl_vars['item']['created_on'])); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>:commits commits on :day<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" onclick="return false;">
                <span class="count" style="height:<?php echo $this->_tpl_vars['item']['percentage']; ?>
%"></span>
              </a>
            </li>
          <?php endforeach; endif; unset($_from); ?> 
          </ul>
        <?php endif; ?>
        </td>
        <td class="star"><?php echo smarty_function_object_subscription(array('object' => $this->_tpl_vars['repository'],'user' => $this->_tpl_vars['logged_user']), $this);?>
</td>
        <td class="visibility"><?php echo smarty_function_object_visibility(array('object' => $this->_tpl_vars['repository'],'user' => $this->_tpl_vars['logged_user']), $this);?>
</td>
      </tr>
    <?php endforeach; endif; unset($_from); ?>
    </table>
  <?php else: ?>
    <p class="empty_page"><?php $this->_tag_stack[] = array('lang', array('add_url' => $this->_tpl_vars['add_repository_url'])); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There are no repositories added. Would you like to <a href=":add_url">create one</a><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>?</p>
  <?php endif; ?>
  </div>