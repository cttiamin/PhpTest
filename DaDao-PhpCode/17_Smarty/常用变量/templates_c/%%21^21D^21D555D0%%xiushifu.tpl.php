<?php /* Smarty version 2.6.26, created on 2009-12-20 09:31:21
         compiled from xiushifu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'capitalize', 'xiushifu.tpl', 6, false),array('modifier', 'count_characters', 'xiushifu.tpl', 7, false),array('modifier', 'count_words', 'xiushifu.tpl', 8, false),array('modifier', 'date_format', 'xiushifu.tpl', 9, false),array('modifier', 'default', 'xiushifu.tpl', 10, false),array('modifier', 'strip_tags', 'xiushifu.tpl', 11, false),array('modifier', 'truncate', 'xiushifu.tpl', 12, false),)), $this); ?>
<html>
<head>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
</head>
<body>
<?php echo ((is_array($_tmp=$this->_tpl_vars['message'])) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
<br>
<?php echo ((is_array($_tmp=$this->_tpl_vars['message'])) ? $this->_run_mod_handler('count_characters', true, $_tmp) : smarty_modifier_count_characters($_tmp)); ?>
<br>
<?php echo ((is_array($_tmp=$this->_tpl_vars['message'])) ? $this->_run_mod_handler('count_words', true, $_tmp) : smarty_modifier_count_words($_tmp)); ?>
<br>
<?php echo ((is_array($_tmp=$this->_tpl_vars['message'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
<br>
<?php echo ((is_array($_tmp=@$this->_tpl_vars['message'])) ? $this->_run_mod_handler('default', true, $_tmp) : smarty_modifier_default($_tmp)); ?>
<br>
<?php echo ((is_array($_tmp=$this->_tpl_vars['message'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
<br>
<?php echo ((is_array($_tmp=$this->_tpl_vars['message'])) ? $this->_run_mod_handler('truncate', true, $_tmp) : smarty_modifier_truncate($_tmp)); ?>
</body>
</html>