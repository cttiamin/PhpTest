<html>
<head>
<title>抽象类和接口</title>
</head>
<body>
<?php
interface IName{									//定义第一个接口
	function setName($name);
	function getName();
}
interface IAge{
	function setAge($age);
	function getAge();
}
class SunYang implements IName,IAge{				//定义一个用于实现上面接口的类
	private $name; 
	private $age;
	function setName($name){ 
		$this->name=$name;
	}
	function getName(){
		echo "姓名:".$this->name." ";
	}
	function setAge($age){ 
		$this->age=$age;
	}
	function getAge(){
		echo "年龄:".$this->age;
	}
}
$object=new SunYang();
$object->setName("三扬科技");
$object->getName();
$object->setAge(5);
$object->getAge();
?>
</body>
</html>
