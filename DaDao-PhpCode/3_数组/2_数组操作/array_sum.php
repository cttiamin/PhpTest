<html>
<head>
<title>其他常用数组函数</title>
</head>
<body>
<?php
$array=array("50","24","hello","21","sunyang","5");		//字符串"hello"被忽略，不参与求和运算
$sum=array_sum($array);
echo "求和运算的结果为：".$sum;					//输出求和运算的结果
?>
</body>
</html>
