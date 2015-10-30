<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>其它数据类型转换成整型</title>
</head>

<body>
<?php
	$a="123";			// 定义一个内容为纯数字的字符串型变量a
	$b="123zjmphp";		// 定义一个数字开头的字符串型变量b
	$c="2.32";			// 定义一个内容为小数的字符串型变量c
	$d="2.32abc";		// 定义一个以小数开头的字符串型变量d
	$e="sunyang123";	// 定义一个非数字开头的字符串型变量e
	$f=true;			// 定义一个值为TRUE的布尔型变量f
	$g=false;			// 定义一个值为FALSE的布尔型变量g
	$h="3.1415926";		// 定义一个浮点型变量h
	
	echo (int)$a."<br>";
	echo (int)$b."<br>";
	echo (int)$c."<br>";
	echo (int)$d."<br>";
	echo (int)$e."<br>";
	echo (int)$f."<br>";
	echo (int)$g."<br>";
	echo (int)$h."<br>";
?>
</body>
</html>
