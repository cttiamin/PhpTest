<html>
<head>
<title>克隆的应用</title>
</head>
<body>

<?php
class MyClone{
public function __clone(){
echo "对象已经被克隆"; 
}
}
$objectA = new MyClone();   
$objectB =$objectA;								//不调用__clone()，没任何输出
$objectC =clone $objectA; 						//调用__clone()
?>
</body>
</html>
