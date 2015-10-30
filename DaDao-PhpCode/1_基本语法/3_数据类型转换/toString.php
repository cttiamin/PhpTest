<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>其它数据类型转换为字符串</title>
</head>

<body>
<?php
	$a=123;		// 定义一个整型变量a
	$b=3.14;	// 定义一个浮点型变量b
	$c=true;	// 定义一个值为TRUE的布尔型变量c
	$d=false;	// 定义一个值为FALSE的布尔型变量d
	$e=array("abc");	// 定义一个数组e
	$f=NULL;		// 定义一个NULL型变量f
	
	echo (string)$a."<br>";
	echo (string)$b."<br>";
	echo (string)$c."<br>";
	echo (string)$d."这是显示为空字符串<br>";
	echo (string)$e."<br>";
	echo (string)$f."这是显示为空字符串<br>";
?>
</body>
</html>
