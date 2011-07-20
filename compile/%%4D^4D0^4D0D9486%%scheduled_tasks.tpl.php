<?php /* Smarty version 2.6.16, created on 2011-07-06 20:20:40
         compiled from /home/mensajes/public_html/gestion/activecollab/application/modules/system/views/empty_slates/scheduled_tasks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'lang', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/empty_slates/scheduled_tasks.tpl', 2, false),array('function', 'image_url', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/empty_slates/scheduled_tasks.tpl', 6, false),array('function', 'scheduled_task_command', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/empty_slates/scheduled_tasks.tpl', 22, false),array('function', 'scheduled_task_url', '/home/mensajes/public_html/gestion/activecollab/application/modules/system/views/empty_slates/scheduled_tasks.tpl', 26, false),)), $this); ?>
<div id="empty_slate_system_roles" class="empty_slate">
  <h3><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>About Scheduled Tasks<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
  
  <ul class="icon_list">
    <li>
      <img src="<?php echo smarty_function_image_url(array('name' => "admin/modules.gif"), $this);?>
" class="icon_list_icon" alt="" />
      <span class="icon_list_title"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Scheduled Tasks<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      <span class="icon_list_description"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Some activeCollab modules require to be called periodically in order to do something. For instance, Backup module requires to be called once a day in order to create a daily backup. Tasks that are executed in this way are usually utility tasks and do not require user interaction<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>.</span>
    </li>
    
    <li>
      <img src="<?php echo smarty_function_image_url(array('name' => "admin/scheduled-tasks.gif"), $this);?>
" class="icon_list_icon" alt="" />
      <span class="icon_list_title"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Execution Frequency<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      <span class="icon_list_description"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There are three type of scheduled events - events executed frequently (every 3 - 5 minutes), events executed once an hour and events executed once a day. These events need to be triggered from outside, by system utility used to periodically trigger and execute tasks<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>.</span>
    </li>
    
    <li>
      <img src="<?php echo smarty_function_image_url(array('name' => "admin/cli.gif"), $this);?>
" class="icon_list_icon" alt="" />
      <span class="icon_list_title"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Executing Scheduled Tasks<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      <span class="icon_list_description">
        <?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Scheduled tasks can be executed through command line by executing following commands<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:
        <pre>php <?php echo smarty_function_scheduled_task_command(array('task' => 'frequently'), $this);?>
 &gt; /dev/null
php <?php echo smarty_function_scheduled_task_command(array('task' => 'hourly'), $this);?>
 &gt; /dev/null
php <?php echo smarty_function_scheduled_task_command(array('task' => 'daily'), $this);?>
 &gt; /dev/null</pre>
        <?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>or through web interface by sending HTTP request to event URL-s<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:
        <pre>/usr/bin/curl -s "<?php echo smarty_function_scheduled_task_url(array('task' => 'frequently'), $this);?>
" &gt; /dev/null
/usr/bin/curl -s "<?php echo smarty_function_scheduled_task_url(array('task' => 'hourly'), $this);?>
" &gt; /dev/null
/usr/bin/curl -s "<?php echo smarty_function_scheduled_task_url(array('task' => 'daily'), $this);?>
" &gt; /dev/null</pre>
        <?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Commands listed above are just examples. Please consult your system administrator or hosting provider for exact location of PHP or curl executables and for assistance with getting these commands to execute properly on your server<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>.
      </span>
    </li>
    
    <li>
      <img src="<?php echo smarty_function_image_url(array('name' => "admin/book.gif"), $this);?>
" class="icon_list_icon" alt="" />
      <span class="icon_list_title"><?php $this->_tag_stack[] = array('lang', array()); $_block_repeat=true;smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>More Info<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_lang($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      <span class="icon_list_description">You can read more about Scheduled Tasks and how they should be configured in Administrator's Guide.</span>
    </li>
  </ul>
</div>