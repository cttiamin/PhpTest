<html>
<head>
<title>������ͽӿ�</title>
</head>
<body>
<?php
interface IName{									//�����һ���ӿ�
	function setName($name);
	function getName();
}
interface IAge{
	function setAge($age);
	function getAge();
}
class SunYang implements IName,IAge{				//����һ������ʵ������ӿڵ���
	private $name; 
	private $age;
	function setName($name){ 
		$this->name=$name;
	}
	function getName(){
		echo "����:".$this->name." ";
	}
	function setAge($age){ 
		$this->age=$age;
	}
	function getAge(){
		echo "����:".$this->age;
	}
}
$object=new SunYang();
$object->setName("����Ƽ�");
$object->getName();
$object->setAge(5);
$object->getAge();
?>
</body>
</html>
