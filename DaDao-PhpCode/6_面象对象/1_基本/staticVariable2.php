<html>
<head>
<title>����������</title>
</head>
<body>
<?php
class Myclass{
static $staticvariable =0;
	function addOne(){
	self::$staticvariable++;
	echo "\$staticvariable��ֵΪ��".self::$staticvariable++;
	}
}
$object = new Myclass();
$object->addOne();
?>
</body>
</html>
