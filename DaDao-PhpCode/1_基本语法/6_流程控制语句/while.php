<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>while语句的应用</title>
</head>

<body>
<?php
	$a=0;
	while($a<5){	//当变量a的值等于5时退出循环
		$a = $a+1;	//执行一次循环，变量a的值加1
		echo $a."<br>";
	}
	/*二维数组的循环
	$abc=array(
	array("1"=>"1","2"=>"2","three"=>"3"),
	array("1"=>"1","2"=>"2","three"=>"3"),
	);
	while($key[]=$abc){
		print_r($key);
	} 
	*/

	//写的格式
	//while($key=$array){
	//	$array[$key]=$array[$key];
	//}
?>
</body>
</html>
