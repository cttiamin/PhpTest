<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ȫ�ֱ�����Ӧ��</title>
</head>

<body>
<?php
	$a= "outside";	// ����һ������a
	// ����һ������local
	function local(){
		global $a;		// ������a����Ϊȫ�ֱ���.������һ��
		echo "��local�����ڲ���ñ���a".$a."<br>";
		global $b;		// ������b����Ϊȫ�ֱ���
		$b="inside";		
	}
	local();	// ���ú���local()���������local�����ڲ�����a��ֵ
	echo "�ں����ⲿ��ñ���".$b."<br>";	// �ں���local�ⲿ�������b��ֵ

?>
</body>
</html>
