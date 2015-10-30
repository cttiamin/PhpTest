<html>
<head>
<title>函数的重要元素--参数</title>
</head>
<body>
<?php
function printVar($a,$c,$b=10){
	echo "a=$a b=$b c=$c";
}
$a=1;
$c=3;
echo printVar($a,$c); 
?>

</body>
</html>
