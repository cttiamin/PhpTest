<html>
<head>
<title>�̳�</title>
</head>
<body>
<?php
class People{								//����һ������People
	function __construct($name,$age){			//���幹�췽��
		$this->name=$name;
		$this->age=$age;
	}
	function say(){							//�����Ա����say()
		echo "������".$this->name." ";
		echo "���䣺".$this->age;
		echo "<br>";
	}
	function __destruct(){}						//������������
}
class Student extends People {					//����һ������Student
	function say($language){					//���Ǹ���ĳ�Ա����say()
		echo $this->name." ����ѧϰ".$language."����";
	}
}
$student=new Student("����Ƽ�",5);
$student->say("PHP");
?>
</body>
</html>
