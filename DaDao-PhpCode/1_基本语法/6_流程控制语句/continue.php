<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>continue语句应用</title>
</head>

<body>
<?php 
	for($a=1;$a<=5;$a++){
		echo "开始第".$a."次循环<br>";
		continue;
		echo $a."<br>"; 	//此处将不被输出
	}
?>
</body>
</html>
