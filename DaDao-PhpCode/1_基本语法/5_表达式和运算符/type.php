<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>类型运算符</title>
</head>

<body>

<?php 
	    class A{}			//定义一个类A
		$a = new A();		//实例化一个类A的对象a
		var_dump($a instanceof A); 	//使用类型运算判断a是否为类A的实例对象

?>
</body>
</html>
