<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>赋值运算符的应用</title>
</head>
<body>
<?php 
	$a = 11;
	echo "a = ".$a."<br>"; 
	echo "a+=5 =".($a+=5)."<br>"; //语句执行完毕后a的值变为16
	echo "a-=3 =".($a-=3)."<br>"; //语句执行完毕后a的值变为13
	echo "a*=2 =".($a*=2)."<br>"; //语句执行完毕后a的值变为26
	echo "a/=4 =".($a/=4)."<br>"; //语句执行完毕后a的值变为6.5
	echo "a%=6 =".($a%=6)."<br>"; //语句执行完毕后a的值变为0
	echo "a.=abc = ".$a.=abc;  	  //语句执行完毕后a的值变为0abc
?>
</body>
</html>
