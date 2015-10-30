<?php /* Smarty version 2.6.22, created on 2009-01-10 13:49:13
         compiled from test.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'test.tpl', 1, false),array('modifier', 'date_format', 'test.tpl', 25, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "smarty.conf"), $this);?>

<html>
 <head>
   <title><?php echo $this->_config[0]['vars']['pagetitle']; ?>
</title>
   <LINK href="css/css.css" type=text/css rel=stylesheet>
 </head>
 <body>
 <div class="mainbox threadlist">
 <div class="headactions">
</div>
<h1><?php echo $this->_config[0]['vars']['pagetitle']; ?>
</h1>
 <table class="portalbox"  cellpadding="0" cellspacing="1" >
 <thead class="separation">
  <tr>
 <td><?php echo $this->_config[0]['vars']['title']; ?>
</td>
 <td><?php echo $this->_config[0]['vars']['user']; ?>
</td>
  <td><?php echo $this->_config[0]['vars']['posttime']; ?>
</td>
  <td><?php echo $this->_config[0]['vars']['operation']; ?>
</td>
 </tr>
  </thead>
  <?php unset($this->_sections['topic']);
$this->_sections['topic']['name'] = 'topic';
$this->_sections['topic']['loop'] = is_array($_loop=$this->_tpl_vars['article']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['topic']['show'] = true;
$this->_sections['topic']['max'] = $this->_sections['topic']['loop'];
$this->_sections['topic']['step'] = 1;
$this->_sections['topic']['start'] = $this->_sections['topic']['step'] > 0 ? 0 : $this->_sections['topic']['loop']-1;
if ($this->_sections['topic']['show']) {
    $this->_sections['topic']['total'] = $this->_sections['topic']['loop'];
    if ($this->_sections['topic']['total'] == 0)
        $this->_sections['topic']['show'] = false;
} else
    $this->_sections['topic']['total'] = 0;
if ($this->_sections['topic']['show']):

            for ($this->_sections['topic']['index'] = $this->_sections['topic']['start'], $this->_sections['topic']['iteration'] = 1;
                 $this->_sections['topic']['iteration'] <= $this->_sections['topic']['total'];
                 $this->_sections['topic']['index'] += $this->_sections['topic']['step'], $this->_sections['topic']['iteration']++):
$this->_sections['topic']['rownum'] = $this->_sections['topic']['iteration'];
$this->_sections['topic']['index_prev'] = $this->_sections['topic']['index'] - $this->_sections['topic']['step'];
$this->_sections['topic']['index_next'] = $this->_sections['topic']['index'] + $this->_sections['topic']['step'];
$this->_sections['topic']['first']      = ($this->_sections['topic']['iteration'] == 1);
$this->_sections['topic']['last']       = ($this->_sections['topic']['iteration'] == $this->_sections['topic']['total']);
?> 
 <tr>
 <td><?php echo $this->_tpl_vars['article'][$this->_sections['topic']['index']]['title']; ?>
</td> <td><?php echo $this->_tpl_vars['article'][$this->_sections['topic']['index']]['user']; ?>
</td>  <td><?php echo ((is_array($_tmp=$this->_tpl_vars['article'][$this->_sections['topic']['index']]['posttime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>   <td><a href="showContent.php?id=<?php echo $this->_tpl_vars['article'][$this->_sections['topic']['index']]['id']; ?>
"><?php echo $this->_config[0]['vars']['operation']; ?>
</a></td> </tr>
 <?php endfor; else: ?>
 <tr>
 <td colspan="4"><?php echo $this->_tpl_vars['notopic']; ?>
</td>
 </tr>
 <?php endif; ?> 
 </div>
 <div class="pages_btns">
 <tr>
 <td colspan="4" >
 <div class="pages">
 <form method="get" action="">
<?php echo $this->_config[0]['vars']['totaltopic']; ?>
<?php echo $this->_tpl_vars['total']; ?>
  <?php echo $this->_config[0]['vars']['di']; ?>
<?php echo $this->_tpl_vars['currentPage']; ?>
/<?php echo $this->_tpl_vars['totalPage']; ?>
<?php echo $this->_config[0]['vars']['ye']; ?>
<?php echo $this->_tpl_vars['first']; ?>
<?php echo $this->_tpl_vars['back']; ?>
<?php echo $this->_tpl_vars['links']; ?>
<?php echo $this->_tpl_vars['next']; ?>
<?php echo $this->_tpl_vars['last']; ?>
<input name="page" type="text" size="1" value="<?php echo $this->_tpl_vars['currentPage']; ?>
" >
<input type="submit" value="<?php echo $this->_config[0]['vars']['btnValue']; ?>
" >
</form> 
</div>
</div>
 </td>
 </tr> 
 </table>
 </body>
</html>