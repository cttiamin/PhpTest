<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>λ�����Ӧ��</title>
</head>

<body>
<?php
	$a=5;	//����ʱ���5תΪ��������101;
	$b=3;	//����ʽ���3תΪ��������11
	echo ($a&$b)."<br>";	//���101��11��(��)������ת��Ϊʮ���ƵĽ��
	echo ($a|$b)."<br>";	//���101��11��(��)������ת��Ϊʮ���ƵĽ��
	echo ($a^$b)."<br>";	//���101��11��(���)������ת��Ϊʮ���ƵĽ��
	echo (~$a)."<br>"; //���101��(��)������ת��Ϊʮ���ƵĽ��
	echo ($a<<$b)."<br>"; //���101������11��λ��ת��Ϊʮ���ƵĽ��
	echo ($a>>$b)."<br>";//���101������11��λ��ת��Ϊʮ���ƵĽ��
	
?>
</body>
</html>
