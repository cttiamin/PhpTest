<?php
		
		//str_split 将字符串平均分割为数组
	$str="hellohellohellohellohello";
	$array=str_split($str,5); 
	print_r($array);
	
	
	//切分与合并字符串
	$string="sunyangsunyangsunyang";
	$split_length=7;
	$split=str_split($string,$split_length);//将字符串平均的切分成长度为7的子字符串
	print_r($split); 
?>