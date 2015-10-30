<?php

$allnum=10;
function change($num){
	$num=$num+1;
	echo "形参的值为；".$num."<br>";
}

change(&$allnum);		//加入&后实参会和形参一起改变	
	echo "实参的值为".$allnum;

?>