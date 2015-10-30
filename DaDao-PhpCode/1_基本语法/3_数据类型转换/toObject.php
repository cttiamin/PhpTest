<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>其它数据转换为对象</title>
</head>

<body>
<?php
	$a=(object)123;			// 将整型数据转型为对象并赋给变量a
	$b=(object)3.14;		// 将浮点型数据转型为对象并赋给变量b
	$c=(object)true;		// 将布尔型数据转型为对象并赋给变量c
	$d=(object)"Hello";		// 将字符串转型为对象并赋给变量d
	$e=(object)NULL;		// 将NULL转型为对象并赋给变量e
	$f=(object)array("a"=>aaa,"b"=>bbb,"c"=>ccc);	// 将一个数组转型为对象并赋给变量f
	echo $a->scalar."<br>";
	echo $b->scalar."<br>";
	echo $c->scalar."<br>";
	echo $d->scalar."<br>";
	echo $e->scalar."<br>";
	echo $f->a."<br>";	// 输出对象f中成员变量b的值
	
?>
</body>
</html>


