<?php
	$string1="我有$500美元";
	$string2="你好,,^_^ zjmphp ";
	echo $string1 ;
	
	$result1=preg_quote($string1);
	$result2=preg_quote($string2);
	echo $result1;
	echo "<br>";
	echo $result2;	

?>
