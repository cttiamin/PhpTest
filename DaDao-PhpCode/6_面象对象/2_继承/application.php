<html>
<head>
<title>�̳�</title>
</head>
<body>
<?php
class People{									//����һ������People
	function __construct($name,$age){				//���幹�캯��
		$this->name=$name;
		$this->age=$age;
		echo "���ø���Ĺ��췽��";
		echo "<br>";
	}
	function say(){								//�����Ա����say()
		echo "������".$this->name." ";
		echo "���䣺".$this->age;
		echo "<br>";
	}
	function __destruct(){}						//������������
}
class Student extends People {						//����һ������Student
	function __construct($name,$age){				//���幹�캯��
		$this->name=$name;
		$this->age=$age;
		echo"��������Ĺ��췽��";
		echo "<br>";
	}
	function study($language){						//�����Ա����student()
		echo"������ѧϰ ".$language." ����";
	}
	function __destruct(){}						//������������
}
$student=new Student("����Ƽ�",5);					//�����������student
$student->say();
$student->study("PHP");
?>
</body>
</html>
