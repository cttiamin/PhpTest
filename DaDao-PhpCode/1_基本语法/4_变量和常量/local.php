<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>局部变量的应用</title>
</head>

<body>
<?php
	function local(){
		// 在函数内部声明一个变量a并赋值
		$a="local variable";
		echo "内部的变量为".$a."<br>";
	}
	 //调用函数local()，用来打印出变量a的值
	$a="outside variable";
	local();
	echo "函数外部的变量为".$a;
?>
</body>
</html>
