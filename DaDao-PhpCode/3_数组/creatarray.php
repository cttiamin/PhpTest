<?php
/* 初始化方式
	$a['0']="aaa";
	$a['1']="bbb";
	$a['2']="ccc";
	print_r($a);
	echo "<br>";
	echo $a['1'];
	*/
	//使用array函数方式
	$a=array(
	0=>"aaa",
	1=>"bbb",
	2=>"ccc",
	);
	
	print_r($a);
	echo $a['2'];
	
?>