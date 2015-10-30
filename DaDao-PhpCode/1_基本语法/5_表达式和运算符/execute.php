<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php 
	/*
	使用执行运算符运行Dos 命令dir
	用于列出c:\\appserv 文件下的目录
	并赋给变量 a	
	*/
	$a=`dir c:\\appserv`;
	echo $a;

?>
</body>
</html>
