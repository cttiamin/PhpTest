<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�߼��������Ӧ��</title>
</head>

<body>

<?php  
	$a=true;
	$b=false;
	echo var_dump($a&&$b)."<br>";//��Ϊtrue����false,��Ϊfalse����flase����һ��Ϊflase����flase
	echo var_dump($a||$b)."<br>";//��Ϊtrue����true,��Ϊfalse����flase����һ��Ϊtrue����true
	echo var_dump($a xor $b)."<br>";//��Ϊtrue����false,��Ϊfalse����flase����һ��Ϊtrue����true
	echo var_dump(!$a)."<br>"; //true����false,false����true
	
?>
</body>
</html>
