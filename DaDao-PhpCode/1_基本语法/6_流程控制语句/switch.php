<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>switch语句的应用</title>
</head>

<body>
<?php 
	$a = "zjm";
	switch($a){
		case "changchun";
			echo "changchun";
				break;
		case "zjm";
			echo "zjm<br>";
				break;
	}
	$b = "asp";
	switch($b){
		case "asp";
			echo "asp";
				break;
		case "php";
			echo "php";
				break;
		case "java";
			echo "java";
				break;
	
	
	}
	
	
?>
</body>
</html>
