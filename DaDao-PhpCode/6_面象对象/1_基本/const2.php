<html>
<head>
<title>����������</title>
</head>
<body>
<?php
class  MyClass{
const SUNYANG="����Ƽ�";
function showResult(){
	echo "SUNYANG��ֵΪ��".self::SUNYANG;
}
}
$object=new MyClass();
$object->showResult();
?>
</body>
</html>
