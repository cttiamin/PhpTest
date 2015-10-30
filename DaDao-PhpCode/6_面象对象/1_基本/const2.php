<html>
<head>
<title>面向对象基础</title>
</head>
<body>
<?php
class  MyClass{
const SUNYANG="三扬科技";
function showResult(){
	echo "SUNYANG的值为：".self::SUNYANG;
}
}
$object=new MyClass();
$object->showResult();
?>
</body>
</html>
