<html>
<head>
<title>切分与合并字符串</title>
</head>
<body>
<?php
$pieces = array('Hello','sunyang','&','PHP'); 
$glue=" ";
$string=implode($glue,$pieces);						//把4个字符串合并为一个字符串
echo $string;
?>
</body>
</html>
