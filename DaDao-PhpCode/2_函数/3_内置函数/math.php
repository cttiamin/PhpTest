<html>
<head>
<title>PHP���ú���</title>
</head>
<body>
<?php
$float=7.16;
echo "\$float��ֵΪ��".$float. "<br>";
echo "��������ȡ��Ϊ��".round($float). "<br>";
echo "ȥβȡ��Ϊ��".floor($float). "<br>";
echo "��λȡ��Ϊ��".ceil($float). "<br>";
echo "<br>";
$int=1234;
echo "\$int��ֵΪ��".$int. "<br>";
echo "ת����ʮ������Ϊ��".dechex($int). "<br>";
echo "ת���ɰ˽���Ϊ��".decoct($int). "<br>";
echo "ת���ɶ�����Ϊ��".decbin($int). "<br>";
?>
</body>
</html>
