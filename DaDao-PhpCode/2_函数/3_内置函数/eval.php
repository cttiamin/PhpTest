<html>
<head>
<title>PHP���ú���</title>
</head>
<body>
<?php
$string = "exit();";
//eval($string);
//echo"������䲻�ᱻִ�У�";

$string="����";
$name='����';
$str='���$string ��װ�� $name.<br>';
eval("\$str=\"$str\";");	//������������������
echo $str;

?>

</body>
</html>
