<html>
<head>
<title>继承</title>
</head>
<body>
<?php
class People{									//定义一个父类People
	function __construct($name,$age){				//定义构造函数
		$this->name=$name;
		$this->age=$age;
		echo "调用父类的构造方法";
		echo "<br>";
	}
	function say(){								//定义成员方法say()
		echo "姓名：".$this->name." ";
		echo "年龄：".$this->age;
		echo "<br>";
	}
	function __destruct(){}						//定义析构方法
}
class Student extends People {						//定义一个子类Student
	function __construct($name,$age){				//定义构造函数
		$this->name=$name;
		$this->age=$age;
		echo"调用子类的构造方法";
		echo "<br>";
	}
	function study($language){						//定义成员方法student()
		echo"我在在学习 ".$language." ……";
	}
	function __destruct(){}						//定义析构方法
}
$student=new Student("三扬科技",5);					//创建子类对象student
$student->say();
$student->study("PHP");
?>
</body>
</html>
