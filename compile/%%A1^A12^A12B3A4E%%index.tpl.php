<?php /* Smarty version 2.6.16, created on 2011-07-05 23:24:25
         compiled from C:%5Cwamp%5Cwww%5Cproject%5Cactivecollab/application/modules/backup/views/backup_admin/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'title', 'C:\\wamp\\www\\project\\activecollab/application/modules/backup/views/backup_admin/index.tpl', 1, false),array('block', 'add_bread_crumb', 'C:\\wamp\\www\\project\\activecollab/application/modules/backup/views/backup_admin/index.tpl', 2, false),array('block', 'lang', 'C:\\wamp\\www\\project\\activecollab/application/modules/backup/views/backup_admin/index.tpl', 4, false),array('block', 'form', 'C:\\wamp\\www\\project\\activecollab/application/modules/backup/views/backup_admin/index.tpl', 56, false),array('block', 'wrap', 'C:\\wamp\\www\\project\\activecollab/application/modules/backup/views/backup_admin/index.tpl', 58, false),array('block', 'label', 'C:\\wamp\\www\\project\\activecollab/application/modules/backup/views/backup_admin/index.tpl', 59, false),array('block', 'wrap_buttons', 'C:\\wamp\\www\\project\\activecollab/application/modules/backup/views/backup_admin/index.tpl', 80, false),array('block', 'submit', 'C:\\wamp\\www\\project\\activecollab/application/modules/backup/views/backup_admin/index.tpl', 81, false),array('modifier', 'filesize', 'C:\\wamp\\www\\project\\activecollab/application/modules/backup/views/backup_admin/index.tpl', 9, false),array('modifier', 'datetime', 'C:\\wamp\\www\\project\\activecollab/application/modules/backup/views/backup_admin/index.tpl', 31, false),array('modifier', 'implode', 'C:\\wamp\\www\\project\\activecollab/application/modules/backup/views/backup_admin/index.tpl', 42, false),array('function', 'cycle', 'C:\\wamp\\www\\project\\activecollab/application/modules/backup/views/backup_admin/index.tpl', 30, false),array('function', 'yes_no', 'C:\\wamp\\www\\project\\activecollab/application/modules/backup/views/backup_admin/index.tpl', 75, false),)), $this); ?>
<?php $this->_tag_stack[] = array('title', array()); $_block_repeat=true;smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Backup Settings<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_title($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $this->_tag_stack[] = array('add_bread_crumb', array()); $_block_repeat=true;smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Backup<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_add_bread_crumb($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

  <h2 class="section_name"><span class="section_name_span"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></h2>
  <div class="section_container content">
  <ul>
    <?php if ($this->_tpl_vars['backup_enabled']): ?>
      <li><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Automatic backup is <strong>enabled</strong><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>.</li>
      <li><?php $this->_tag_stack[] = array('lang', array('size' => ((is_array($_tmp=$this->_tpl_vars['total_size'])) ? $this->_run_mod_handler('filesize', true, $_tmp) : smarty_modifier_filesize($_tmp)))); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your next backup will be approximately <strong>:size</strong> in size<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>.</li>
    <?php else: ?>
      <li><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Automatic backup is <strong>disabled</strong><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>.</li>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['backup_how_many_backups'] > 0): ?>
      <li><?php $this->_tag_stack[] = array('lang', array('number_of_backups' => $this->_tpl_vars['backup_how_many_backups'])); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>:number_of_backups last backups will be kept<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
    <?php else: ?>
      <li><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>All backups will be kept<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
    <?php endif; ?>
  </ul>
  
  <?php if (is_foreachable ( $this->_tpl_vars['existing_backups'] )): ?>
    <div class="existing_backups">
      <p><strong><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Existing backups<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong></p>
      <table class="common_table">
        <tr>
          <th><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Backup Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
          <th><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Backup Size<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
          <th colspan="2"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Backup State<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        </tr>
      <?php $_from = $this->_tpl_vars['existing_backups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['existing_backup']):
?>
        <tr class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
          <td><?php echo ((is_array($_tmp=$this->_tpl_vars['existing_backup']['time'])) ? $this->_run_mod_handler('datetime', true, $_tmp) : smarty_modifier_datetime($_tmp)); ?>
</td>
          <td><?php echo ((is_array($_tmp=$this->_tpl_vars['existing_backup']['size'])) ? $this->_run_mod_handler('filesize', true, $_tmp) : smarty_modifier_filesize($_tmp)); ?>
</td>
          <?php if (instance_of ( $this->_tpl_vars['existing_backup']['complete'] , 'Error' )): ?>
          <td colspan="2">
            <span class="backup_corrupted"><?php echo $this->_tpl_vars['existing_backup']['complete']->getMessage(); ?>
</span>
          </td>
          <?php else: ?>
          <td>
            <span class="backup_valid"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Valid<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
          </td>
          <td><span class="details">
              <?php echo ((is_array($_tmp="<br />")) ? $this->_run_mod_handler('implode', true, $_tmp, $this->_tpl_vars['existing_backup']['complete']) : implode($_tmp, $this->_tpl_vars['existing_backup']['complete'])); ?>

            </span></td>
          <?php endif; ?>
        </tr>
      <?php endforeach; endif; unset($_from); ?>
      </table>
      <p><?php $this->_tag_stack[] = array('lang', array('size' => ((is_array($_tmp=$this->_tpl_vars['backup_dir_size'])) ? $this->_run_mod_handler('filesize', true, $_tmp) : smarty_modifier_filesize($_tmp)))); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Backup folder size: <strong>:size</strong><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    </div>
  <?php endif; ?>
  <div class="clear"></div>
  </div>

  <h2 class="section_name"><span class="section_name_span"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Settings<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></h2>
  <div class="section_container">
    <?php $this->_tag_stack[] = array('form', array('action' => $this->_tpl_vars['backup_admin_url'],'method' => 'POST')); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
      <div class="col">
        <?php $this->_tag_stack[] = array('wrap', array('field' => 'how_many_backups')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
          <?php $this->_tag_stack[] = array('label', array('for' => 'how_many_backups','required' => true)); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>How many backups to keep:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <select class="required" name="backup[how_many_backups]" id='how_many_backups' value=$backup_data.how_many_backups>
          <?php $_from = $this->_tpl_vars['how_many_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['how_many_value']):
?>
            <?php if ($this->_tpl_vars['how_many_value'] == $this->_tpl_vars['backup_data']['how_many_backups']): ?>
            <option value="<?php echo $this->_tpl_vars['how_many_value']; ?>
" selected="selected"><?php echo $this->_tpl_vars['how_many_value']; ?>
</option>
            <?php else: ?>
            <option value="<?php echo $this->_tpl_vars['how_many_value']; ?>
"><?php echo $this->_tpl_vars['how_many_value']; ?>
</option>
            <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?>
          </select>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div>
      
      <div class="col">
        <?php $this->_tag_stack[] = array('wrap', array('field' => 'enabled')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
          <?php $this->_tag_stack[] = array('label', array('for' => 'enabled','required' => true)); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enable backup:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php echo smarty_function_yes_no(array('name' => 'backup[enabled]','id' => 'enabled','value' => $this->_tpl_vars['backup_data']['enabled']), $this);?>

        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div>
      <div class="clear"></div>
      
      <?php $this->_tag_stack[] = array('wrap_buttons', array()); $_block_repeat=true;smarty_block_wrap_buttons($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <?php $this->_tag_stack[] = array('submit', array()); $_block_repeat=true;smarty_block_submit($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Submit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_submit($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap_buttons($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  </div>