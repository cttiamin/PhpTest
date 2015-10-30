<html>
<head>
<title>函数的返回值</title>
</head>
<body>
<?php
function multiplication ($a,$b) {
$result = $a*$b;						//计算两个变量的乘积
return $result;							//返回乘积的计算结果
}
echo "3 *10 = ".multiplication (3,10);	//输出计算结果
?> 
</body>
</html>
