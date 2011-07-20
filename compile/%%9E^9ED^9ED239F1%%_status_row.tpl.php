<?php /* Smarty version 2.6.16, created on 2011-07-18 23:26:42
         compiled from /home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/_status_row.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', '/home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/_status_row.tpl', 2, false),array('function', 'user_link', '/home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/_status_row.tpl', 6, false),array('modifier', 'ago', '/home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/_status_row.tpl', 5, false),array('modifier', 'clean', '/home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/_status_row.tpl', 7, false),array('modifier', 'clickable', '/home/mensajes/public_html/gestion/activecollab/application/modules/status/views/status/_status_row.tpl', 7, false),)), $this); ?>
<?php $this->assign('status_update_user', $this->_tpl_vars['status_update']->getCreatedBy()); ?>        
<tr class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
" id="status_update_<?php echo $this->_tpl_vars['status_update']->getId(); ?>
">
  <td class="avatar"><img src="<?php echo $this->_tpl_vars['status_update_user']->getAvatarUrl(true); ?>
" alt="" /></td>
  <td class="message">
    <?php echo ((is_array($_tmp=$this->_tpl_vars['status_update']->getCreatedOn())) ? $this->_run_mod_handler('ago', true, $_tmp) : smarty_modifier_ago($_tmp)); ?>

    <span class="author"><?php echo smarty_function_user_link(array('user' => $this->_tpl_vars['status_update_user']), $this);?>
</span>
    <span class="update"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['status_update']->getMessage())) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)))) ? $this->_run_mod_handler('clickable', true, $_tmp) : smarty_modifier_clickable($_tmp)); ?>
</span>
  </td>
</tr>