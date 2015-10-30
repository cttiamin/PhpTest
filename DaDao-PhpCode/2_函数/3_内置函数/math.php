<html>
<head>
<title>PHP内置函数</title>
</head>
<body>
<?php
$float=7.16;
echo "\$float的值为：".$float. "<br>";
echo "四舍五入取整为：".round($float). "<br>";
echo "去尾取整为：".floor($float). "<br>";
echo "进位取整为：".ceil($float). "<br>";
echo "<br>";
$int=1234;
echo "\$int的值为：".$int. "<br>";
echo "转换成十六进制为：".dechex($int). "<br>";
echo "转换成八进制为：".decoct($int). "<br>";
echo "转换成二进制为：".decbin($int). "<br>";
?>
</body>
</html>
