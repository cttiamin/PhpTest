<html>
<head>
<title>�̳�</title>
</head>
<body>
<?php
class People{								//����һ������People
	public function __construct($name){				//���幹�췽��
		$this->name = $name;
	}
	function __destruct(){}						//������������
}
class Student extends People { 					//����һ������Student
	function __construct($name,$age){ 					//���幹�췽��
		parent::__construct($name);			//ʹ��parent::�����˸���Ĺ��캯
		$this->age = $age;
	}
	function say(){							//�����Ա����say()
		echo "������".$this->name." ";
		echo "���䣺".$this->age;
		echo "<br>";
	}
	function study($language){					//�����Ա����study()
		echo"������ѧϰ ".$language." ����";
	}
	function __destruct(){}						//������������
}
$student = new Student("����Ƽ�",5);						//�����������student
$student->say();
$student->study("PHP");
?>
</body>
</html>
