<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������������ת��Ϊ����</title>
</head>

<body>
<?php
	$a=123;		// ����һ�����ͱ���a
	$b=3.14;	// ����һ�������ͱ���b
	$c=true;	// ����һ�������ͱ���c
	$d="hello";	// ����һ���ַ����ͱ���d
	//����һ����A������������ͬ���Եĳ�Ա����
	class A{
		private $private;
		private $public;
		protected $protected;
	}
	$f=new A();
	$g=NULL;
	
	echo var_dump((array)$a)."<br>";
	echo var_dump((array)$b)."<br>";
	echo var_dump((array)$c)."<br>";
	echo var_dump((array)$d)."<br>";
	echo var_dump((array)$f)."<br>";
	echo var_dump((array)$g)."<br>";
	$abc="asdf";
	echo (array)$abc."<br>";
	echo var_dump(array($abc))."<br>";
?>
</body>
</html>
