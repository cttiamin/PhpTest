<html>
<head>
<title>继承</title>
</head>
<body>
<?php
class People{								//定义一个父类People
	function __construct($name,$age){		//定义构造方法
		$this->name=$name;
		$this->age=$age;
	}
	function say(){								//定义成员方法say()
		echo "姓名:".$this->name." ";
		echo "年龄：".$this->age;
		echo "<br>";
	}
	function __destruct(){}					//定义析构方法
}

class Student extends People {				//定义一个子类Student	
	function study($language){					//定义成员方法study()
		echo"我正在学习 ".$language." ……";
	}
}
$student=new Student("三扬科技",5);		//创建子类对象student
$student->say();							//调用父类方法
$student->study("PHP");						//调用子类方法
?>
</body>
</html>
