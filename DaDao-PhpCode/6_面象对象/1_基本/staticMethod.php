<html>
<head>
<title>面向对象基础</title>
</head>
<body>
<?php
class MyClass{
	static function showResult($number){
		echo"\$number = ".$number;
		echo "<br>";
		self::addOne($number);						//调用同一类的静态方法addOne()
	}
	static function addOne($number){
		echo"\$number+1 = ";
		echo $number+1;
	}
}
$number=100;
MyClass::showResult($number);						//调用静态方法showResult()
?>
</body>
</html>
