<html>
<head>
<title>继承</title>
</head>
<body>
<?php
class Number{}								//一个没有任何成员属性和方法的空类
class One extends Number{
	private $name;
	function setName($name){
		$this->name=$name;
	}
    function getName(){
		echo $this->name;
	}
}
class Two extends Number{
	private $name;
	function setName($name){
		$this->name=$name;
	}
    function getName(){
		echo $this->name;
	}
}
class is_Class{
	static function check($obj){				//检验对象是否属于某个类
		if($obj instanceof One){
			echo "属于One类";
		}elseif($obj instanceof Two){
			echo "属于Two类";
		}else{
			echo  "不属于任何类";
		}
	}
}
$one=new One();
$one->setName("one");
$one->getName();
is_Class::check($one);
echo "<br>";
$two=new Two();
$two->setName("two");
$two->getName();
is_Class::check($two);
?>
</body>
</html>