<html>
<head>
<title>��̬</title>
</head>
<body>
<?php
abstract class Tools{
	function goHome(){}
}
class Walk extends Tools {
	function goHome(){
		echo"���лؼ�";
	}
}
class Bicycle extends Tools {
	function goHome(){
		echo"�����г��ؼ�";
	}
}
function printRightSelect($object){
	if($object instanceof Tools){
		$object->goHome();
	}else{
		echo"���ִ���";
	}
	echo"<br>";
}
echo"��һ��ѡ��Ϊ��"; 
$object1=new Walk();
printRightSelect($object1);
echo"�ڶ���ѡ��Ϊ��"; 
$object2=new Bicycle();
printRightSelect($object2);
?>
</body>
</html> 
