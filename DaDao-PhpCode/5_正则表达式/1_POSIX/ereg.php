<?php
	$string="ab9cd";
	if(ereg("[0-9]",$string)){
		echo "该字符串中含有数字";	//不配
	}else{
		echo "该字符串中不含有数字";	//配
	}
?>