<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>比较运算符的应用</title>
</head>

<body>
<?php
	$a=5;
	$b=3;
	$c="5";
	$d=5.0;
	echo var_dump($a==$b)."<br>";
	echo var_dump($a===$b)."<br>";
	echo var_dump($a!=$b)."<br>";
	echo var_dump($a!==$d)."<br>";
	echo var_dump($a<$b)."<br>";
	echo var_dump($a<=$b)."<br>";
	echo var_dump($a>=$b)."<br>";
	echo var_dump($a<=$b)."<br>";
	echo var_dump($a>=$b)."<br>";
	 
?>
</body>
</html>
