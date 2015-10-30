<html>
<head>
<title>函数的重要元素--参数</title>
</head>
<body>
<?php
function divisor($m,$n){
	if($m%$n==0){
		return $n;
	}else{
		return divisor($n,$m%$n);
	}
}
$a=6;
$b=9;
$result = divisor(6,9);
echo $a."和".$b."的最大公约数为：".$result;
?>
</body>
</html>
