<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������������ת��Ϊ������</title>
</head>

<body>
<?php
	$a=0;					// ����һ��ֵΪ������ͱ���a
	$b=123;					// ����һ���������ͱ���b
	$c=0.0;					// ����һ��ֵΪ��ĸ����ͱ���c
	$d=3.14;				// ����һ�����㸡���ͱ���d
	$e="";					// ����һ�����ַ����ͱ���e
	$f="0";					// ����һ������Ϊ����ַ����ͱ���f
	$g="TRUE";				// ����һ���ǿ��ַ����ͱ���g
	$h=array();				// ���������h
	$i=array("a","b","c");	// ����һ���ǿ�����i
	$j=NULL;				// ����һ��NULL�͵ı���j
	
	echo var_dump((boolean)$a)."<br>";
	echo var_dump((boolean)$b)."<br>";
	echo var_dump((boolean)$c)."<br>";
	echo var_dump((boolean)$d)."<br>";
	echo var_dump((boolean)$e)."<br>";
	echo var_dump((boolean)$f)."<br>";
	echo var_dump((boolean)$g)."<br>";
	echo var_dump((boolean)$h)."<br>";
	echo var_dump((boolean)$i)."<br>";
	echo var_dump((boolean)$j)."<br>";

?>
</body>
</html>
