<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>其它数据类型转换为布尔型</title>
</head>

<body>
<?php
	$a=0;					// 定义一个值为零的整型变量a
	$b=123;					// 定义一个非零整型变量b
	$c=0.0;					// 定义一个值为零的浮点型变量c
	$d=3.14;				// 定义一个非零浮点型变量d
	$e="";					// 定义一个空字符串型变量e
	$f="0";					// 定义一个内容为零的字符串型变量f
	$g="TRUE";				// 定义一个非空字符串型变量g
	$h=array();				// 定义空数组h
	$i=array("a","b","c");	// 定义一个非空数组i
	$j=NULL;				// 定义一个NULL型的变量j
	
	echo var_dump((boolean)$a)."<br>";
	echo var_dump((boolean)$b)."<br>";
	echo var_dump((boolean)$c)."<br>";
	echo var_dump((boolean)$d)."<br>";
	echo var_dump((boolean)$e)."<br>";
	echo var_dump((boolean)$f)."<br>";
	echo var_dump((boolean)$g)."<br>";
	echo var_dump((boolean)$h)."<br>";
	echo var_dump((boolean)$i)."<br>";
	echo var_dump((boolean)$j)."<br>";

?>
</body>
</html>
