<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>其它数据类型转换为数组</title>
</head>

<body>
<?php
	$a=123;		// 定义一个整型变量a
	$b=3.14;	// 定义一个浮点型变量b
	$c=true;	// 定义一个布尔型变量c
	$d="hello";	// 定义一个字符串型变量d
	//定义一个类A，包含三个不同属性的成员变量
	class A{
		private $private;
		private $public;
		protected $protected;
	}
	$f=new A();
	$g=NULL;
	
	echo var_dump((array)$a)."<br>";
	echo var_dump((array)$b)."<br>";
	echo var_dump((array)$c)."<br>";
	echo var_dump((array)$d)."<br>";
	echo var_dump((array)$f)."<br>";
	echo var_dump((array)$g)."<br>";
	$abc="asdf";
	echo (array)$abc."<br>";
	echo var_dump(array($abc))."<br>";
?>
</body>
</html>
