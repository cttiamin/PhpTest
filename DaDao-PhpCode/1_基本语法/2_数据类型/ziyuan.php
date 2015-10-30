<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>资源的应用</title>
</head>

<body>
<?php
		/*
		使用mysql_connect()函数建立一个MySQL数据库连接
		并调用get_resource_type()函数显示这个资源类型 
		*/
	$connect= mysql_connect("localhost","root","123456");
	echo get_resource_type($connect)."<br>";
		 /*
		 *使用fopen()函数打开“ziyuan.php”这个文件
		 *并调用get_resource_type()函数显示这个资源类型
		 */
	$fopen=fopen("ziyuan.php","r");
	echo get_resource_type($fopen);
?>
</body>
</html>
