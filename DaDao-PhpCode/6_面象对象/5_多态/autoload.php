<html>
<head>
<title>PHP5�е����ⷽ��</title>
</head>
<body>
<?php
function __autoload($class_name){
include($class_name.".php");	//$class_name ����Example
} 
$object=new Example();		//���Զ�����Example.php
$object->printSunyang();	
?>
</body>
</html>
