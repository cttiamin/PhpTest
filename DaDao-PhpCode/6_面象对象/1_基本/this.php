<html>
<head>
<title>����������</title>
</head>
<body>
<?php
class Pelope{
private $name;
    function setName($name){
		$this->name=$name;
	}
    function getName(){
		echo $this->name;
	}
}
$user1 = new Pelope();							//��������user1
$user1->setName('����');
$user1->getName();
echo"<br>";
$user2 = new Pelope();							//��������user2
$user2->setName('����');    
$user2->getName();
?>
</body>
</html>
