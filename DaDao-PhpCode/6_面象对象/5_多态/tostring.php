<html>
<head>
<title>PHP5中的特殊方法</title>
</head>
<body>
<?php
class Example{
public function __toString(){
	return "三扬科技";
}
}
$object= new Example();
echo $object;
?>
</body>
</html>
