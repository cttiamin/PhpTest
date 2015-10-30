<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>常量的应用</title>
</head>

<body>
<?php 
	define("COLOR","red");	//定义一个常量COLOR,值为red
	echo COLOR."<br>";		//输出常量COLOR 的值
	echo color."<br>";		//由于格式不正确.不能输出常量COLOR的值
	define("SHAPE","round",TRUE);	//定义一个常量值为SHAPE 不区分大小写
	echo shape."<br>";	//输出常量SHAPE的值
	echo sHap;			//输出常量SHAPE的值

?>

</body>
</html>
