<html>
<head>
<title>遍历数组元素</title>
</head>
<body>
<?php
$letters=array(									//使用array()结构创建数组
	0=>"a",
	1=>"b",
	2=>"c"
);
for($i=0;$i<count($letters);$i++){
$value=$letters[$i];
echo"$i --- $value<br>";
}
?>
</body>
</html>
