<?php /* Smarty version 2.6.26, created on 2010-02-02 18:18:34
         compiled from my.tpl */ ?>
<html>
<head>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
</head>
<body>
hello,<?php echo $this->_tpl_vars['name']; ?>
</br>

<?php $this->assign('message', "欢迎来到中国"); ?>
<?php echo $this->_tpl_vars['message']; ?>
</br>

<?php echo $_GET['username']; ?>
</br>

<?php echo @ME; ?>
;</br>

<?php echo '2.6.26'; ?>
;</br>
<?php echo '}'; ?>
;</br>

</body>
</html>