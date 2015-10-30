<?php /* Smarty version 2.6.26, created on 2009-12-20 09:57:42
         compiled from smarty.conf.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'smarty.conf.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "smarty.conf"), $this);?>

<html>
<head>
<title><?php echo $this->_config[0]['vars']['title']; ?>
</title>
</head>
<body>
<center><?php echo $this->_config[0]['vars']['heading']; ?>
</center>
</body>
</html>