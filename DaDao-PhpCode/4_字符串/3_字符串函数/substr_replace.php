<html>
<head>
<title>字符串的查找与处理</title>
</head>
<body>
<?php
$string="Hello world";
$replacement="SUNYANG";
$start=6;
$replace=substr_replace($string,$replacement,$start);
echo $replace;
?>

<?php
	$string="hello world ";
	echo "$string <br>";
	echo substr_replace($string,"zjm",6);		//替换
	echo substr_replace($string,"zjm",6,0);	//0为插入 
?>
</body>
</html>
