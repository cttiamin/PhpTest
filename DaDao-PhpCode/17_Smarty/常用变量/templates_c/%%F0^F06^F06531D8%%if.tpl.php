<?php /* Smarty version 2.6.26, created on 2009-12-20 08:38:44
         compiled from if.tpl */ ?>
<html>
<head>
<title></title>
</head>
<body>
<?php if ($this->_tpl_vars['scope'] >= 90): ?>
�ɼ�����<br>
<?php elseif ($this->_tpl_vars['scope'] >= 70): ?>
�ɼ�����<br>
<?php elseif ($this->_tpl_vars['scope'] >= 60): ?>
�ɼ�����<br>
<?php else: ?>
�ɼ�������<br>
<?php endif; ?>

<?php $_from = $this->_tpl_vars['notfourseasons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['inkey'] => $this->_tpl_vars['season']):
?>
 <?php echo $this->_tpl_vars['inkey']; ?>
  
 <?php echo $this->_tpl_vars['season']; ?>
 
 <br>
 <?php endforeach; else: ?>
 ѭ�������鲻���ڻ�Ϊ�� <br>
<?php endif; unset($_from); ?>

</body>
</html>