<html>
<head>
<meta http-equiv="Content-Language" content="en" />
<meta name="GENERATOR" content="Zend Studio" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>¶¨Òå²¢Ê¹º¯Êý</title>
</head>
<body bgcolor="#FFFFFF" text="#000000" link="#FF9966" vlink="#FF9966" alink="#FFCC99">
<?php
function nRecursion($n){
	$s=1;
	for($i=1;$i<=$n;$i++){
		$s=$s*$i;
	}
	return $s;
}
echo nRecursion(3);
?>
</body>
</html>