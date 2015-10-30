<?php /* Smarty version 2.6.26, created on 2009-12-20 09:08:43
         compiled from section.tpl */ ?>
<html>
<head>
<title></title>
</head>
<body>
<?php unset($this->_sections['season']);
$this->_sections['season']['name'] = 'season';
$this->_sections['season']['loop'] = is_array($_loop=$this->_tpl_vars['fourseasons']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['season']['show'] = true;
$this->_sections['season']['max'] = $this->_sections['season']['loop'];
$this->_sections['season']['step'] = 1;
$this->_sections['season']['start'] = $this->_sections['season']['step'] > 0 ? 0 : $this->_sections['season']['loop']-1;
if ($this->_sections['season']['show']) {
    $this->_sections['season']['total'] = $this->_sections['season']['loop'];
    if ($this->_sections['season']['total'] == 0)
        $this->_sections['season']['show'] = false;
} else
    $this->_sections['season']['total'] = 0;
if ($this->_sections['season']['show']):

            for ($this->_sections['season']['index'] = $this->_sections['season']['start'], $this->_sections['season']['iteration'] = 1;
                 $this->_sections['season']['iteration'] <= $this->_sections['season']['total'];
                 $this->_sections['season']['index'] += $this->_sections['season']['step'], $this->_sections['season']['iteration']++):
$this->_sections['season']['rownum'] = $this->_sections['season']['iteration'];
$this->_sections['season']['index_prev'] = $this->_sections['season']['index'] - $this->_sections['season']['step'];
$this->_sections['season']['index_next'] = $this->_sections['season']['index'] + $this->_sections['season']['step'];
$this->_sections['season']['first']      = ($this->_sections['season']['iteration'] == 1);
$this->_sections['season']['last']       = ($this->_sections['season']['iteration'] == $this->_sections['season']['total']);
?>
<?php echo $this->_tpl_vars['fourseasons'][$this->_sections['season']['index']]; ?>
<br>
<?php endfor; endif; ?>
</body>
</html>