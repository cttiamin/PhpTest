
<html>
<head>
<meta http-equiv="Content-Language" content="en" />
<meta name="GENERATOR" content="Zend Studio" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>算术运算符的应用</title>
</head>
<body bgcolor="#FFFFFF" text="#000000" link="#FF9966" vlink="#FF9966" alink="#FFCC99">
<?php
		$a = 5;
		$b = 3;
		echo "a=".$a."\tb="."$b"."<br>";
		echo "a+b=".($a+$b)."<br>";
		echo "a-b=".($a-$b)."<br>";
		echo "a*b=".$a*$b."<br>";
		echo "a/b=".$a/$b."<br>";
		echo "a%b=".$a%$b."<br>";
		$a++;	// 变量a自加1
		$b--;		// 变量b自减1
		echo "a=".$a."\tb="."$b";
		
?>
</body>
</html>