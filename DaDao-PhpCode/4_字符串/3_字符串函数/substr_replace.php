<html>
<head>
<title>�ַ����Ĳ����봦��</title>
</head>
<body>
<?php
$string="Hello world";
$replacement="SUNYANG";
$start=6;
$replace=substr_replace($string,$replacement,$start);
echo $replace;
?>

<?php
	$string="hello world ";
	echo "$string <br>";
	echo substr_replace($string,"zjm",6);		//�滻
	echo substr_replace($string,"zjm",6,0);	//0Ϊ���� 
?>
</body>
</html>
