<html>
<head>
<title>错误处理函数</title>
</head>
<body>
<?php
$divisor=0;
$number=100;		
if($divisor!=0){			
	$result=$number/$divisor;
	echo $result;
}else{
	trigger_error("除数不能为零!",E_USER_ERROR); 
	//E_USER_NOTICE
}
?>
</body>
</html>