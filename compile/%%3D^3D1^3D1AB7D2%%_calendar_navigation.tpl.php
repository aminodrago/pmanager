<?php /* Smarty version 2.6.16, created on 2011-07-05 22:16:54
         compiled from C:%5Cwamp%5Cwww%5Cproject%5Cactivecollab/application/modules/calendar/views/_calendar_navigation.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'clean', 'C:\\wamp\\www\\project\\activecollab/application/modules/calendar/views/_calendar_navigation.tpl', 3, false),)), $this); ?>
<table class="calendar_navigation">
  <tr>
    <td class="prev"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['_prev_month']['url'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
" class="calendar_navigation_item"><span class="calendar_navigation_item_inner">&laquo; <?php echo ((is_array($_tmp=$this->_tpl_vars['_prev_month']['label'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
</span></a></td>
    <td class="current"><span class="calendar_navigation_item"><span class="calendar_navigation_item_inner"><?php echo $this->_tpl_vars['_current_month']; ?>
 / <?php echo $this->_tpl_vars['_current_year']; ?>
</span></span></td>
    <td class="next"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['_next_month']['url'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
" class="calendar_navigation_item"><span class="calendar_navigation_item_inner"><?php echo ((is_array($_tmp=$this->_tpl_vars['_next_month']['label'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
 &raquo;</span></a></td>
  </tr>
</table>