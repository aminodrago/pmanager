<?php /* Smarty version 2.6.16, created on 2011-07-26 17:25:31
         compiled from /var/www/pmanager/activecollab/application/modules/system/layouts/application.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'image_url', '/var/www/pmanager/activecollab/application/modules/system/layouts/application.tpl', 16, false),array('function', 'page_title', '/var/www/pmanager/activecollab/application/modules/system/layouts/application.tpl', 18, false),array('function', 'page_head_tags', '/var/www/pmanager/activecollab/application/modules/system/layouts/application.tpl', 19, false),array('function', 'template_vars_to_js', '/var/www/pmanager/activecollab/application/modules/system/layouts/application.tpl', 20, false),array('function', 'flash_box', '/var/www/pmanager/activecollab/application/modules/system/layouts/application.tpl', 25, false),array('modifier', 'clean', '/var/www/pmanager/activecollab/application/modules/system/layouts/application.tpl', 18, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us" lang="en-us">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <?php if ($this->_tpl_vars['mobile_device_css']): ?>
      <link rel="stylesheet" href="<?php echo $this->_tpl_vars['mobile_device_css']; ?>
" type="text/css" />
    <?php else: ?>
      <link rel="stylesheet" href="<?php echo $this->_tpl_vars['assets_url']; ?>
/css.php" type="text/css" />
      <link rel="stylesheet" href="<?php echo $this->_tpl_vars['assets_url']; ?>
/themes/<?php echo $this->_tpl_vars['theme_name']; ?>
/theme.css" type="text/css" />
      <!--[if IE]>
        <link rel="stylesheet" href="<?php echo $this->_tpl_vars['assets_url']; ?>
/stylesheets/iefix.css" type="text/css" />
      <![endif]-->
    <?php endif; ?>
    
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['assets_url']; ?>
/js.php"></script>
    <link rel="shortcut icon" href="<?php echo smarty_function_image_url(array('name' => 'favicon.png'), $this);?>
" type="image/x-icon" />

    <title><?php echo smarty_function_page_title(array('default' => 'Projects'), $this);?>
 / <?php echo ((is_array($_tmp=$this->_tpl_vars['owner_company']->getName())) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
</title>
    <?php echo smarty_function_page_head_tags(array(), $this);?>

    <?php echo smarty_function_template_vars_to_js(array(), $this);?>

  </head>
  <body style="margin: 0;">
    <div id="wrapper">
      <!--<h1><?php echo smarty_function_page_title(array('default' => 'Page'), $this);?>
</h1> -->
      <?php echo smarty_function_flash_box(array(), $this);?>

      <div id="content"><?php echo $this->_tpl_vars['content_for_layout']; ?>
</div>
    </div>
  </body>
</html>