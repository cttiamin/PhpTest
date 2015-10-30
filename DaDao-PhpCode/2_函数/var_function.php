<html>
<head>
<title>PHP内置函数</title>
</head>
<body>
<?php
$sunyang = "三扬科技";
if(empty($sunyang)){ 							//判断变量$sunyang是否为空值
	echo "\$sunyang为0或者空值";
	echo "<br>";
}else{
	echo "\$sunyang的值为\"".$sunyang."\"";
	echo "<br>";
}
$null = "";
if(empty($null)){ 								//判断变量$null是否为空值
	echo "\$null为0或者空值";
	echo "<br>";
}else{
	echo "\$null的值为\"".$null."\"";
	echo "<br>";
}
$zero=0;
if (empty($zero)){								//判断变量$zero是否为空值
	echo "\$zero为0或者空值";
	echo "<br>";
}else{
	echo "\$zero的值为".$zero;
	echo "<br>";
}
?>
</body>
</html>
