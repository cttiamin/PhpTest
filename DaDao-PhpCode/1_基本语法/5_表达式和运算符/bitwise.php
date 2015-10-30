<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>位运算的应用</title>
</head>

<body>
<?php
	$a=5;	//运算时会把5转为二进制码101;
	$b=3;	//运算式会把3转为二进制码11
	echo ($a&$b)."<br>";	//输出101和11做(与)操作后转换为十进制的结果
	echo ($a|$b)."<br>";	//输出101和11做(或)操作后转换为十进制的结果
	echo ($a^$b)."<br>";	//输出101和11做(异或)操作后转换为十进制的结果
	echo (~$a)."<br>"; //输出101做(非)操作后转换为十进制的结果
	echo ($a<<$b)."<br>"; //输出101向左移11单位后转换为十进制的结果
	echo ($a>>$b)."<br>";//输出101向右移11单位后转换为十进制的结果
	
?>
</body>
</html>
