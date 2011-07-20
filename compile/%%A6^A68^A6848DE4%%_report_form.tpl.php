<?php /* Smarty version 2.6.16, created on 2011-07-05 22:16:41
         compiled from C:%5Cwamp%5Cwww%5Cproject%5Cactivecollab/application/modules/timetracking/views/global_timetracking/_report_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'wrap', 'C:\\wamp\\www\\project\\activecollab/application/modules/timetracking/views/global_timetracking/_report_form.tpl', 3, false),array('block', 'label', 'C:\\wamp\\www\\project\\activecollab/application/modules/timetracking/views/global_timetracking/_report_form.tpl', 4, false),array('block', 'lang', 'C:\\wamp\\www\\project\\activecollab/application/modules/timetracking/views/global_timetracking/_report_form.tpl', 24, false),array('function', 'text_field', 'C:\\wamp\\www\\project\\activecollab/application/modules/timetracking/views/global_timetracking/_report_form.tpl', 5, false),array('function', 'yes_no', 'C:\\wamp\\www\\project\\activecollab/application/modules/timetracking/views/global_timetracking/_report_form.tpl', 20, false),array('function', 'select_company', 'C:\\wamp\\www\\project\\activecollab/application/modules/timetracking/views/global_timetracking/_report_form.tpl', 39, false),array('function', 'select_users', 'C:\\wamp\\www\\project\\activecollab/application/modules/timetracking/views/global_timetracking/_report_form.tpl', 41, false),array('function', 'select_date', 'C:\\wamp\\www\\project\\activecollab/application/modules/timetracking/views/global_timetracking/_report_form.tpl', 61, false),)), $this); ?>
<div class="section_container">
  <div class="col">
    <?php $this->_tag_stack[] = array('wrap', array('field' => 'name')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
      <?php $this->_tag_stack[] = array('label', array('for' => 'reportName','required' => true)); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php echo smarty_function_text_field(array('name' => 'report[name]','value' => $this->_tpl_vars['report_data']['name'],'id' => 'reportName','class' => 'required'), $this);?>

    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  </div>
  
  <div class="col">
    <?php $this->_tag_stack[] = array('wrap', array('field' => 'group_name')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
      <?php $this->_tag_stack[] = array('label', array('for' => 'reportGroupName')); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Report Group<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php echo smarty_function_text_field(array('name' => 'report[group_name]','value' => $this->_tpl_vars['report_data']['group_name'],'id' => 'reportGroupName'), $this);?>

    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  </div>
  
  <div class="clear"></div>
  
  <?php $this->_tag_stack[] = array('wrap', array('field' => 'sum_by_user')); $_block_repeat=true;smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php $this->_tag_stack[] = array('label', array()); $_block_repeat=true;smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Summarize by User<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_label($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php echo smarty_function_yes_no(array('name' => 'report[sum_by_user]','value' => $this->_tpl_vars['report_data']['sum_by_user']), $this);?>

  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_wrap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<h2 class="section_name"><span class="section_name_span"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Show Records...<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></h2>
<div class="section_container">
  <table>
    <tr>
      <td class="report_select_label"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Assigned To<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td class="report_select_select">
        <select name="report[user_filter]" class="report_async_select">
          <option value="anybody" <?php if ($this->_tpl_vars['report_data']['user_filter'] == 'anybody'): ?>selected="selected"<?php endif; ?>><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Anybody<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
          <option value="logged_user" <?php if ($this->_tpl_vars['report_data']['user_filter'] == 'logged_user'): ?>selected="selected"<?php endif; ?>><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Person Accessing This Report<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
          <option value="company" class="report_async_option" <?php if ($this->_tpl_vars['report_data']['user_filter'] == 'company'): ?>selected="selected"<?php endif; ?>><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Member of a Company ...<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
          <option value="selected" class="report_async_option" <?php if ($this->_tpl_vars['report_data']['user_filter'] == 'selected'): ?>selected="selected"<?php endif; ?>><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Selected Users ...<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
        </select>
      </td>
      <td class="report_select_additional">
      <?php if ($this->_tpl_vars['report_data']['user_filter'] == 'company'): ?>
        <?php echo smarty_function_select_company(array('name' => 'report[user_filter_data]','value' => $this->_tpl_vars['report_data']['user_filter_data']), $this);?>

      <?php elseif ($this->_tpl_vars['report_data']['user_filter'] == 'selected'): ?>
        <?php echo smarty_function_select_users(array('name' => 'report[user_filter_data]','value' => $this->_tpl_vars['report_data']['user_filter_data']), $this);?>

      <?php endif; ?>
      </td>
    </tr>
    <tr>
      <td class="report_select_label"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>For Day<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td class="report_select_select">
        <select name="report[date_filter]" class="report_async_select">
          <option value="all" <?php if ($this->_tpl_vars['report_data']['date_filter'] == 'all'): ?>selected="selected"<?php endif; ?>><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Any Time<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
          <option value="today" <?php if ($this->_tpl_vars['report_data']['date_filter'] == 'today'): ?>selected="selected"<?php endif; ?>><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Today<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
          <option value="this_week" <?php if ($this->_tpl_vars['report_data']['date_filter'] == 'this_week'): ?>selected="selected"<?php endif; ?>><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This Week<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
          <option value="last_week" <?php if ($this->_tpl_vars['report_data']['date_filter'] == 'last_week'): ?>selected="selected"<?php endif; ?>><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Last Week<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
          <option value="this_month" <?php if ($this->_tpl_vars['report_data']['date_filter'] == 'this_month'): ?>selected="selected"<?php endif; ?>><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This Month<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
          <option value="last_month" <?php if ($this->_tpl_vars['report_data']['date_filter'] == 'last_month'): ?>selected="selected"<?php endif; ?>><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Last Month<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
          <option value="selected_date" class="report_async_option" <?php if ($this->_tpl_vars['report_data']['date_filter'] == 'selected_date'): ?>selected="selected"<?php endif; ?>><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Specific Date ...<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
          <option value="selected_range" class="report_async_option" <?php if ($this->_tpl_vars['report_data']['date_filter'] == 'selected_range'): ?>selected="selected"<?php endif; ?>><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Specific Range ...<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
        </select>
      </td>
      <td class="report_select_additional">
      <?php if ($this->_tpl_vars['report_data']['date_filter'] == 'selected_date'): ?>
        <?php echo smarty_function_select_date(array('name' => 'report[date_from]','value' => $this->_tpl_vars['report_data']['date_from']), $this);?>

      <?php elseif ($this->_tpl_vars['report_data']['date_filter'] == 'selected_range'): ?>
        <table>
	        <tr>
	          <td><?php echo smarty_function_select_date(array('name' => 'report[date_from]','value' => $this->_tpl_vars['report_data']['date_from']), $this);?>
</td>
	          <td style="width: 10px; text-align: center;">-</td>
	          <td><?php echo smarty_function_select_date(array('name' => 'report[date_to]','value' => $this->_tpl_vars['report_data']['date_to']), $this);?>
</td>
	        </tr>
	      </table>
      <?php endif; ?>
      </td>
    </tr>
    
    <tr>
      <td class="report_select_label"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
      <td class="report_select_select">
        <select name="report[billable_filter]">
          <option value="all" <?php if ($this->_tpl_vars['report_data']['billable_filter'] == 'all'): ?>selected="selected"<?php endif; ?>><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Any<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
          <option value="all"></option>
          <option value="not_billable" <?php if ($this->_tpl_vars['report_data']['billable_filter'] == 'not_billable'): ?>selected="selected"<?php endif; ?>><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Non-Billable<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
          <option value="billable" <?php if ($this->_tpl_vars['report_data']['billable_filter'] == 'billable'): ?>selected="selected"<?php endif; ?>><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Billable<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
          <option value="pending_payment" <?php if ($this->_tpl_vars['report_data']['billable_filter'] == 'pending_payment'): ?>selected="selected"<?php endif; ?>><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Pending Payment<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
          <option value="billable_not_billed" <?php if ($this->_tpl_vars['report_data']['billable_filter'] == 'billable_not_billed'): ?>selected="selected"<?php endif; ?>><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Not Yet Billed (Billable or Pending Payment)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
          <option value="billable_billed" <?php if ($this->_tpl_vars['report_data']['billable_filter'] == 'billable_billed'): ?>selected="selected"<?php endif; ?>><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Already Billed<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
        </select>
      </td>
      <td></td>
    </tr>
  </table>
</div>