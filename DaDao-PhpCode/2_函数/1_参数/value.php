<html>
<head>
<title>函数的重要元素--参数</title>
</head>
<body>
<?php
function change($number) {
$number= $number + 1;						 	//使变量$number的值增加1
echo "函数内部\$number的值为：".$number;			//输出变量$number的值
echo "<br>";
}
$number=10;
change($number);								//调用change()函数
echo "函数外部\$number的值为：".$number;			//输出变量$number的值
?>

</body>
</html>
