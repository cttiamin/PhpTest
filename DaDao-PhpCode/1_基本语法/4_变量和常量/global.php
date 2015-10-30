<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>全局变量的应用</title>
</head>

<body>
<?php
	$a= "outside";	// 定义一个变量a
	// 定义一个函数local
	function local(){
		global $a;		// 将变量a声明为全局变量.引用上一个
		echo "在local函数内部获得变量a".$a."<br>";
		global $b;		// 将变量b声明为全局变量
		$b="inside";		
	}
	local();	// 调用函数local()，用于输出local函数内部变量a的值
	echo "在函数外部获得变量".$b."<br>";	// 在函数local外部输出变量b的值

?>
</body>
</html>
