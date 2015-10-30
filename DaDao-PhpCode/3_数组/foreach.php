<html>
<head>
<title>遍历数组元素</title>
</head>
<body>
<?php
$letters=array(		//使用array()结构创建数组
	0=>"a",
	1=>"b",
	2=>"c"
);
foreach($letters as $key=>$value){
	echo"$key --- $value <br>";
}
?>
</body>
</html>
