<html>
<head>
<title>其他常用数组函数</title>
</head>
<body>
<pre>
<?php
$letters= array(a,b,c,d,e);
echo"翻转前为：";
foreach($letters as $value){
	echo " $value  ";
}
$reverse=array_reverse($letters);
echo"<br>";
echo"翻转后为：";
foreach($reverse as $value){
	echo " $value  ";
}
?>
</pre>
</body>
</html>
