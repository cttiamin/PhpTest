<html>
<head>
<title>Perl������ʽ</title>
</head>
<body>
<?php
$subject= "��ӭ��������aa";
$replacement="����Ƽ�";
$pattern="/a{2}/";
$replace = preg_replace($pattern,$replacement,$subject);
echo $replace;
?>
</body>
</html>
