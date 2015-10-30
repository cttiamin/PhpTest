<html>
<head>
<title>面向对象基础</title>
</head>
<body>
<?php
class Myclass{
static $staticvariable =0;
	function addOne(){
	self::$staticvariable++;
	echo "\$staticvariable的值为：".self::$staticvariable++;
	}
}
$object = new Myclass();
$object->addOne();
?>
</body>
</html>
