<html>
<head>
<title>�̳�</title>
</head>
<body>
<?php
class Number{}								//һ��û���κγ�Ա���Ժͷ����Ŀ���
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
	static function check($obj){				//��������Ƿ�����ĳ����
		if($obj instanceof One){
			echo "����One��";
		}elseif($obj instanceof Two){
			echo "����Two��";
		}else{
			echo  "�������κ���";
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