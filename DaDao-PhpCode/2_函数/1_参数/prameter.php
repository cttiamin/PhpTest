<html>
<head>
<title>��������ҪԪ��--����</title>
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
echo $a."��".$b."�����Լ��Ϊ��".$result;
?>
</body>
</html>
