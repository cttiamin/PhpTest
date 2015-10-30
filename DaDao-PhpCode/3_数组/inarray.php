<?php
	//in_array 确定元素是否在数组中
	$people=array("Tom","Bob","Kate","Peter",23);
	if(in_array("Peter",$people,true)){
			echo "找到匹配项";
	}else{
		echo "没有找到";
	}
?>