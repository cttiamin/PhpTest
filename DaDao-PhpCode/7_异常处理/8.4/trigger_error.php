<html>
<head>
<title>��������</title>
</head>
<body>
<?php
$divisor=0;
$number=100;		
if($divisor!=0){			
	$result=$number/$divisor;
	echo $result;
}else{
	trigger_error("��������Ϊ��!",E_USER_ERROR); 
	//E_USER_NOTICE
}
?>
</body>
</html>