<?php
	
	$string1="zjmphp";
	$string2="Zjmphp hello";
	
	if($string1==$string2){
	echo "这两个字符串相等";
	}else{
		echo "这两个不相等";
	}
?>
<br>
<?php
	$flages=strcmp($string1,$string2);
	if($flages==0){
	echo "这两个字符串相等";
	}else if($flages>0){
	echo "第一个字符串比较大";
	}else if($flages<0){
	echo "第二个字符串比较大";
	}
?>
<br>
<?php
	$flages=strcasecmp($string1,$string2);
	if($flages==0){
	echo "这两个字符串相等";
	}else if($flages>0){
	echo "第一个字符串比较大";
	}else if($flages<0){
	echo "第二个字符串比较大";
	}
?>
<br>
<?php
	$flages=strncmp($string1,$string2,4);
	if($flages==0){
	echo "这两个字符串相等";
	}else if($flages>0){
	echo "第一个字符串比较大";
	}else if($flages<0){
	echo "第二个字符串比较大";
	}
?>
<br>
<?php
	$flages=strncasecmp($string1,$string2,4);
	if($flages==0){
	echo "这两个字符串相等";
	}else if($flages>0){
	echo "第一个字符串比较大";
	}else if($flages<0){
	echo "第二个字符串比较大";
	}
?>
