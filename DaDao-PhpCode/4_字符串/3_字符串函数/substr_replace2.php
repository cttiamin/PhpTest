<html>
<head>
<title>�ַ����Ĳ����봦��</title>
</head>
<body>
<?php
$string=" SUNYANG";													//�����ַ���
$replacement="Hello";
$start=0;
$length=0;
$insert=substr_replace($string,$replacement,$start,$length);	//�����ַ���SUNYANG
echo $insert;
?>
</body>
</html>
