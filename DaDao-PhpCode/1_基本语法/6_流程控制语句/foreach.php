<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>foreach语句的应用</title>
</head>

<body>
<?php 
	$number = array("one"=>"1","two"=>"2","three"=>"3");

	//foreach 的第一种方式
	foreach($number as $var){
		echo $var."<br>";
	}
	//foreach 的第二种方式
	foreach($number as $num_key=>$num_value){
		echo $num_key . "is" . $num_value."<br>";
	}
	echo "<br>";
	//二维数组
	$abc=array(
	array("one"=>"1","two"=>"2","three"=>"3"),
	array("aaaa"=>"1","bbbb"=>"2","cccc"=>"3"),
	);
	
	foreach($abc as $v){
		foreach ($v as $key=>$vale){
			print_r($key."is".$vale."<br>");
		}
		print_r("<br>");
	}
	

?>
</body>
</html>
