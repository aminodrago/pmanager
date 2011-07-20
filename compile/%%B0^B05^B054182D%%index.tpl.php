<?php /* Smarty version 2.6.16, created on 2011-07-06 17:29:15
         compiled from /home/mensajes/public_html/gestion/activecollab/application/modules/resources/views/reminders/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'title', '/home/mensajes/public_html/gestion/activecollab/application/modules/resources/views/reminders/index.tpl', 1, false),array('block', 'add_bread_crumb', '/home/mensajes/public_html/gestion/activecollab/application/modules/resources/views/reminders/index.tpl', 2, false),array('block', 'lang', '/home/mensajes/public_html/gestion/activecollab/application/modules/resources/views/reminders/index.tpl', 8, false),array('function', 'object_link', '/home/mensajes/public_html/gestion/activecollab/application/modules/resources/views/reminders/index.tpl', 16, false),array('function', 'user_link', '/home/mensajes/public_html/gestion/activecollab/application/modules/resources/views/reminders/index.tpl', 22, false),array('function', 'image_url', '/home/mensajes/public_html/gestion/activecollab/application/modules/resources/views/reminders/index.tpl', 23, false),)), $this); ?>
<?php $this->_tag_stack[] = array('title', array()); $_block_repeat=true;smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Active Reminders<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $this->_tag_stack[] = array('add_bread_crumb', array()); $_block_repeat=true;smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Active Reminders<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php if (is_foreachable ( $this->_tpl_vars['active_reminders'] )): ?>
  <div id="active_reminders" class="height_limited_popup">
    <table class="common_table reminders_table">
      <tr>
        <th><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Reminder<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>From<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th></th>
      </tr>
    <?php $_from = $this->_tpl_vars['active_reminders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['active_reminder']):
?>
      <tr>
        <td class="reminder">
          <?php if ($this->_tpl_vars['active_reminder']->getObjectId()): ?>
            <strong><?php echo smarty_function_object_link(array('object' => $this->_tpl_vars['active_reminder']->getObject()), $this);?>
</strong><br />
          <?php endif; ?>
          <?php if ($this->_tpl_vars['active_reminder']->getComment()): ?>
            <?php echo $this->_tpl_vars['active_reminder']->getComment(); ?>

          <?php endif; ?>
        </td>
        <td class="from"><?php echo smarty_function_user_link(array('user' => $this->_tpl_vars['active_reminder']->getCreatedBy()), $this);?>
</td>
        <td class="options"><a href="<?php echo $this->_tpl_vars['active_reminder']->getDismissUrl(); ?>
"><img src='<?php echo smarty_function_image_url(array('name' => "gray-delete.gif"), $this);?>
' alt='' /></a></td>
      </tr>
    <?php endforeach; endif; unset($_from); ?>
    </table>
  </div>
  <script type="text/javascript">
    App.widgets.ActiveReminders.init('active_reminders');
  </script>
<?php endif; ?>

<p class="empty_page" style="<?php if (is_foreachable ( $this->_tpl_vars['active_reminders'] )): ?>display: none<?php endif; ?>"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There are no reminders for you<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>