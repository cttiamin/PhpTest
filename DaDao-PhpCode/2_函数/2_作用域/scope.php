<?php 
	function test() {
		global $var; //此时的变量$var转换为全局变量
		$var = 2;  //局部变量 ,更改$var值
	}
	$var = 10 ; //全局变量
	test();
	echo $var;
?>