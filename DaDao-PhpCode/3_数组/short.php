<?php
	//sort 按从小到大排序 数字优先，英文，汉字
	$number=array(23,65,100,89,76);
		echo"原数组为：";
		print_r($number);
		sort($number);
		echo "排序后数组为：";
		print_r($number);
		
	echo "<br>";
	
	$number2=array("北京","上海","大连","哈尔滨");
		$number2=array(23,65,100,89,76);
		echo"原数组为：";
		print_r($number2);
		sort($number2);
		echo "排序后数组为：";
		print_r($number2);
		
?>