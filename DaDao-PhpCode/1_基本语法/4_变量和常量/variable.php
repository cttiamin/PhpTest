<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>可变变量的应用</title>
</head>

<body>
<?php 
	$a = "Hello";		//定义一个变量并赋值为hello
	$$a = "World";		//定义一个可变变量，该变量名称为变量a的值
	echo $a."<br>";		//输出变量a 的值
	echo $$a."<br>";	//输出可变变量的值

?>
</body>
</html>
