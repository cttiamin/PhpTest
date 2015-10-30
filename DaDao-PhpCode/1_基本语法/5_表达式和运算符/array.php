<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>数组运算符的应用</title>
</head>

<body>
<?php 
	$a = array("1"=>one,"2"=>two);
	$b = array("color"=>"red","shape"=>"round");
	$c = array("1"=>"one","2"=>"two");
	echo var_dump($a+$b)."<br>";
	echo var_dump($a==$c)."<br>";
	echo var_dump($a===$b)."<br>";
	echo var_dump($a!=$b)."<br>";
	echo var_dump($a!==$b);
?>
</body>
</html>
