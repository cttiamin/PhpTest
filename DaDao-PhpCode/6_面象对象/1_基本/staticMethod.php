<html>
<head>
<title>����������</title>
</head>
<body>
<?php
class MyClass{
	static function showResult($number){
		echo"\$number = ".$number;
		echo "<br>";
		self::addOne($number);						//����ͬһ��ľ�̬����addOne()
	}
	static function addOne($number){
		echo"\$number+1 = ";
		echo $number+1;
	}
}
$number=100;
MyClass::showResult($number);						//���þ�̬����showResult()
?>
</body>
</html>
