<html>
<head>
<title>面向对象基础</title>
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
$user1 = new Pelope();							//创建对象user1
$user1->setName('张三');
$user1->getName();
echo"<br>";
$user2 = new Pelope();							//创建对象user2
$user2->setName('李四');    
$user2->getName();
?>
</body>
</html>
