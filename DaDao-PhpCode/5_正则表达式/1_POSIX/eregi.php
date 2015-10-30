<?php
$password="zjmphp";

if(!eregi("[a-zA-Z0-9_]{6,10}",$password)){	//长试在6 --10 位之前
		echo "不正确";
	}else{
		echo "正确";
	}
?>