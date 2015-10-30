<?php
		//array_key_exists 判断数组中键值
	$search=array("1"=>"first","1"=>"second","1"=>"three");
		if(array_key_exists("6",$search)){
			echo "该键名是存在的";			
		}else{
			echo "该键名是不否在的";
		}
		
?>	