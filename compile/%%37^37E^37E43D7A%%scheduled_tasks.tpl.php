<?php /* Smarty version 2.6.16, created on 2011-07-05 22:52:07
         compiled from C:%5Cwamp%5Cwww%5Cproject%5Cactivecollab/application/modules/system/views/system_tools/scheduled_tasks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'title', 'C:\\wamp\\www\\project\\activecollab/application/modules/system/views/system_tools/scheduled_tasks.tpl', 1, false),array('block', 'add_bread_crumb', 'C:\\wamp\\www\\project\\activecollab/application/modules/system/views/system_tools/scheduled_tasks.tpl', 2, false),array('block', 'lang', 'C:\\wamp\\www\\project\\activecollab/application/modules/system/views/system_tools/scheduled_tasks.tpl', 7, false),array('modifier', 'datetime', 'C:\\wamp\\www\\project\\activecollab/application/modules/system/views/system_tools/scheduled_tasks.tpl', 15, false),array('function', 'empty_slate', 'C:\\wamp\\www\\project\\activecollab/application/modules/system/views/system_tools/scheduled_tasks.tpl', 45, false),)), $this); ?>
<?php $this->_tag_stack[] = array('title', array()); $_block_repeat=true;smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Scheduled Tasks<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $this->_tag_stack[] = array('add_bread_crumb', array()); $_block_repeat=true;smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Scheduled Tasks<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<div id="scheduled_tasks">
  <table>
    <tr>
      <th class="event"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th class="last_activity"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Last Executed On<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
    </tr>
    
    <tr class="odd">
      <td class="event"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Frequently<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td class="last_activity">
      <?php if (instance_of ( $this->_tpl_vars['last_frequently_activity'] , 'DateTimeValue' )): ?>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['last_frequently_activity'])) ? $this->_run_mod_handler('datetime', true, $_tmp) : smarty_modifier_datetime($_tmp)); ?>

      <?php else: ?>
        <?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Never executed<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php endif; ?>
      </td>
    </tr>
    
    <tr class="even">
      <td class="event"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Hourly<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td class="last_activity">
      <?php if (instance_of ( $this->_tpl_vars['last_hourly_activity'] , 'DateTimeValue' )): ?>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['last_hourly_activity'])) ? $this->_run_mod_handler('datetime', true, $_tmp) : smarty_modifier_datetime($_tmp)); ?>

      <?php else: ?>
        <?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Never executed<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php endif; ?>
      </td>
    </tr>
    
    <tr class="odd">
      <td class="event"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Daily<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td class="last_activity">
      <?php if (instance_of ( $this->_tpl_vars['last_daily_activity'] , 'DateTimeValue' )): ?>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['last_daily_activity'])) ? $this->_run_mod_handler('datetime', true, $_tmp) : smarty_modifier_datetime($_tmp)); ?>

      <?php else: ?>
        <?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Never executed<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php endif; ?>
      </td>
    </tr>
  </table>
  
  <?php echo smarty_function_empty_slate(array('name' => 'scheduled_tasks','module' => 'system'), $this);?>

</div>