<?php
	$string="*************aa***********bb*********cc********dd******";
	$array=preg_split("/\*{1,}/",$string,-1);		//{1,}Ϊ1������,-1Ϊ������
		foreach($array as $name ){
			echo $name." ";
	}
?>
