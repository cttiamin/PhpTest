<html>
<head>
<title>��¡��Ӧ��</title>
</head>
<body>

<?php
class MyClone{
public function __clone(){
echo "�����Ѿ�����¡"; 
}
}
$objectA = new MyClone();   
$objectB =$objectA;								//������__clone()��û�κ����
$objectC =clone $objectA; 						//����__clone()
?>
</body>
</html>
