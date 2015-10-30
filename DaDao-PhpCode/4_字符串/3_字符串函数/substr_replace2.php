<html>
<head>
<title>字符串的查找与处理</title>
</head>
<body>
<?php
$string=" SUNYANG";													//定义字符串
$replacement="Hello";
$start=0;
$length=0;
$insert=substr_replace($string,$replacement,$start,$length);	//插入字符串SUNYANG
echo $insert;
?>
</body>
</html>
