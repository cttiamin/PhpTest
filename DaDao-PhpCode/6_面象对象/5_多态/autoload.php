<html>
<head>
<title>PHP5中的特殊方法</title>
</head>
<body>
<?php
function __autoload($class_name){
include($class_name.".php");	//$class_name 会变成Example
} 
$object=new Example();		//会自动加载Example.php
$object->printSunyang();	
?>
</body>
</html>
