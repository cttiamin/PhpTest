<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>其它数据类型转换为浮点型</title>
</head>

<body>
<?php
	$a="123";   	//定义一个内容为纯数字的字符串变量
	$b="123zjmphp";	//定义一个数字开头的字符串
	$c="2.32abc";	//定义一个以小数开头的字符串变量
	$d="zjmphp123";	//定义一个非数字开头的字符串型变量
	$e=true;		// 定义一个值为TRUE的布尔型变量f
	$f=false;		// 定义一个值为FALSE的布尔型变量g
	$g=1234;			//整数形变量
	
	echo (float)$a."<br>";
	echo (float)$b."<br>";
	echo (float)$c."<br>";
	echo (float)$d."<br>";
	echo (float)$e."<br>";
	echo (float)$f."<br>";
	echo (float)$g."<br>";

	
?>
</body>
</html>
