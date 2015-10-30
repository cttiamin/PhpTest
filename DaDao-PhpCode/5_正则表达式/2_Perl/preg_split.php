<?php
	$string="*************aa***********bb*********cc********dd******";
	$array=preg_split("/\*{1,}/",$string,-1);		//{1,}为1个或多个,-1为不限制
		foreach($array as $name ){
			echo $name." ";
	}
?>
