<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��̬������Ӧ��</title>
</head>

<body>
<?php 
	
	function test(){
		 static $a=0;		// ����һ����̬����a������ʼֵΪ0
		 echo $a."<br>";	// �������a��ֵ
		 $a=$a+1;			// ������a��ֵ��1�ٴθ�������a
	}
	test();		// ���ú���test()
	test();
	test();
	global $a;
	echo $a;	// ����a���������ڽ�������������κ�ֵ	
?>
</body>
</html>
