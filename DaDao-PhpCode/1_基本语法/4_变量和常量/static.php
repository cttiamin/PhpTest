<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>静态变量的应用</title>
</head>

<body>
<?php 
	
	function test(){
		 static $a=0;		// 定义一个静态变量a并赋初始值为0
		 echo $a."<br>";	// 输出变量a的值
		 $a=$a+1;			// 将变量a的值加1再次赋给变量a
	}
	test();		// 调用函数test()
	test();
	test();
	global $a;
	echo $a;	// 变量a的生命周期结束，不会输出任何值	
?>
</body>
</html>
