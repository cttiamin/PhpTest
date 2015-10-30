<?php
		//preg_grep 用于查找
	$array=array("1","aa","XYZ","?","3","25");
	$reslut=preg_grep("/^\d+$/",$array,PREG_GREP_INVERT); //\d 以数字开头,+(量词)可以有一个或多个 , ^开始$结束,preg_grep_invert 将不配的返回 
	print_r($reslut);
	
?>