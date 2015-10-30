<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>逻辑运算符的应用</title>
</head>

<body>

<?php  
	$a=true;
	$b=false;
	echo var_dump($a&&$b)."<br>";//都为true返回false,都为false返回flase，有一个为flase返回flase
	echo var_dump($a||$b)."<br>";//都为true返回true,都为false返回flase，有一个为true返回true
	echo var_dump($a xor $b)."<br>";//都为true返回false,都为false返回flase，有一个为true返回true
	echo var_dump(!$a)."<br>"; //true返回false,false返回true
	
?>
</body>
</html>
