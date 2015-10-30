<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>常量的应用</title>
</head>

<body>
<?php
	define("color","yello");
	echo color."<br>";		
	echo COLOR."<br>";
	define("shap","round",true);		//不区分大小写
	echo shap."<br>";
	echo shAP;
	 
?>
</body>
</html>

