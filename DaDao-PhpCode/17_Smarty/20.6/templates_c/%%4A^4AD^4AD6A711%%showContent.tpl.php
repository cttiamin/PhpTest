<?php /* Smarty version 2.6.22, created on 2009-01-10 16:56:47
         compiled from showContent.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'showContent.tpl', 1, false),array('modifier', 'date_format', 'showContent.tpl', 15, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "smarty.conf",'section' => 'showtopic'), $this);?>

<html>
 <head>
   <title><?php echo $this->_tpl_vars['article']['title']; ?>
</title>
   <LINK href="css/css.css" type=text/css rel=stylesheet>
 </head>
 <body> 
<div class="mainbox viewthread">		
<h1><?php echo $this->_tpl_vars['article']['title']; ?>
</h1>
<table id="pid1059839" cellpadding="0" cellspacing="0">
<tr>
<td class="postauthor">								
<div class="postinfo">
<h2><?php echo $this->_tpl_vars['article']['user']; ?>
</h2><?php echo $this->_config[0]['vars']['posttime']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['article']['posttime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>

</div>
<hr>			
<div class="postmessage defaultpost">
<?php echo $this->_tpl_vars['article']['content']; ?>
 													
</div>
</div>
</td>
</tr>
</table>
<ul>									
<li>
<a href="<?php echo $this->_config[0]['vars']['indexpage']; ?>
"><?php echo $this->_config[0]['vars']['goindex']; ?>
</a>								
</li>
</ul>
</div>
 </body>
</html>



