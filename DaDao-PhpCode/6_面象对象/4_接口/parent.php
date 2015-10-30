<html>
<head>
<title>继承</title>
</head>
<body>
<?php
class People{								//定义一个父类People
	public function __construct($name){				//定义构造方法
		$this->name = $name;
	}
	function __destruct(){}						//定义析构方法
}
class Student extends People { 					//定义一个子类Student
	function __construct($name,$age){ 					//定义构造方法
		parent::__construct($name);			//使用parent::调用了父类的构造函
		$this->age = $age;
	}
	function say(){							//定义成员方法say()
		echo "姓名：".$this->name." ";
		echo "年龄：".$this->age;
		echo "<br>";
	}
	function study($language){					//定义成员方法study()
		echo"我正在学习 ".$language." ……";
	}
	function __destruct(){}						//定义析构方法
}
$student = new Student("三扬科技",5);						//创建子类对象student
$student->say();
$student->study("PHP");
?>
</body>
</html>
