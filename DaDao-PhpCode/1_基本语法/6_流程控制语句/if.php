<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>if ...elseif</title>
</head>

<body>
<?php 
	$a = 31;
	$b = 22;
	$c = 16;
	if($a<$b){
		echo "变量a小于变量b";
	}elseif($a<$c){
		echo "变量a小于变量c";
	}else{
		echo "变量a大于变量b和变量c";
	}
?>
</body>
</html>
