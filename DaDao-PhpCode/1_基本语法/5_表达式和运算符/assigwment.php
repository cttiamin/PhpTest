<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ֵ�������Ӧ��</title>
</head>
<body>
<?php 
	$a = 11;
	echo "a = ".$a."<br>"; 
	echo "a+=5 =".($a+=5)."<br>"; //���ִ����Ϻ�a��ֵ��Ϊ16
	echo "a-=3 =".($a-=3)."<br>"; //���ִ����Ϻ�a��ֵ��Ϊ13
	echo "a*=2 =".($a*=2)."<br>"; //���ִ����Ϻ�a��ֵ��Ϊ26
	echo "a/=4 =".($a/=4)."<br>"; //���ִ����Ϻ�a��ֵ��Ϊ6.5
	echo "a%=6 =".($a%=6)."<br>"; //���ִ����Ϻ�a��ֵ��Ϊ0
	echo "a.=abc = ".$a.=abc;  	  //���ִ����Ϻ�a��ֵ��Ϊ0abc
?>
</body>
</html>
