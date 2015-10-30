<html>
<head>
<title>round:四舍五入</title>
</head>
<body>
<?php
$floatNumber = 725.386;							//定义一个浮点数
echo "原浮点数为：".$floatNumber;
echo "<br>";
$result1 = round($floatNumber);
echo "从小数点处进行四舍五入的结果为:".$result1;
echo "<br>";
$result2 = round($floatNumber,2);
echo "从小数点后两位处进行四舍五入的结果为:".$result2;
echo "<br>";
$result3 = round($floatNumber,-2);
echo "从小数点前两位处进行四舍五入的结果为:".$result3;
?>
</body>
</html>