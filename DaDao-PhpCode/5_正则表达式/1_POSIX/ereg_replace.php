<html>
<head>
<title>POSIX������ʽ</title>
</head>
<body>
<?php
$pattern="����";
$string="��ӭ��������";
$replacement ="����Ƽ�";
$replace=ereg_replace($pattern,$replacement,$string); 
echo $replace;
?>
</body>
</html>
