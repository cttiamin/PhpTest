<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��������ת��Ϊ����</title>
</head>

<body>
<?php
	$a=(object)123;			// ����������ת��Ϊ���󲢸�������a
	$b=(object)3.14;		// ������������ת��Ϊ���󲢸�������b
	$c=(object)true;		// ������������ת��Ϊ���󲢸�������c
	$d=(object)"Hello";		// ���ַ���ת��Ϊ���󲢸�������d
	$e=(object)NULL;		// ��NULLת��Ϊ���󲢸�������e
	$f=(object)array("a"=>aaa,"b"=>bbb,"c"=>ccc);	// ��һ������ת��Ϊ���󲢸�������f
	echo $a->scalar."<br>";
	echo $b->scalar."<br>";
	echo $c->scalar."<br>";
	echo $d->scalar."<br>";
	echo $e->scalar."<br>";
	echo $f->a."<br>";	// �������f�г�Ա����b��ֵ
	
?>
</body>
</html>


