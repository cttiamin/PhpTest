<?php
/*
	float round(float $var,[int $precision])
	功能：对一个浮点数进行四舍五入
*/

$if=237.219;
$num=round($if);
echo $num;
echo "<br>";
$num2=round($if,2);	//保留2位小数点
echo $num2;


function aaa(){
	echo "这是我的函数";
}
aAa();

?>