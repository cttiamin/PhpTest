<html>
<head>
<title>����������</title>
</head>
<body>
<?php
class People{									//����People��
	function __construct($name,$sex,$age){				//���幹�췽��
		$this->name=$name;
		$this->sex=$sex;
		$this->age=$age;
	}
	function say(){								//�����Ա����say()
		echo "������".$this->name." ";
		echo "�Ա�".$this->sex." ";
		echo "���䣺".$this->age;
		echo "<br>";
	}
}
$p1=new People("����","��",20);						//��������p1
$p1->say();
$p2=new People("����","Ů",30); 					//��������p2
$p2->say();
$p3=new People("����","��",40);						//��������p3
$p3->say();
?>
</body>
</html>
