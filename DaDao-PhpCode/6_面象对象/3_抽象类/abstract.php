<html>
<head>
<title>抽象类和接口</title>
</head>
<body>
<?php
abstract class Study{
	abstract function printStudy($name,$language);		//定义一个抽象方法
}
class OneStudy extends Study{					//定义OneStudy类继承于Study类
	function printStudy($name,$language){
		echo $name." 正在学习".$language."……";			//抽象方法的具体实现
	}
}
class TwoStudy extends Study{					//定义TwoStudy类继承于Study类
	function printStudy($name,$language){
		echo $name." 正在学习".$language."……";			//抽象方法的具体实现
	}
}
$first=new OneStudy();						//创建对象first
$first->printStudy("Paul","PHP");
echo"<br>";
$second=new TwoStudy();						//创建对象second
$second->printStudy("Bob","JAVA");
?>
</body>
</html>
