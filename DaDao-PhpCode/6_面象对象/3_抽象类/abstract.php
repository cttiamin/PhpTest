<html>
<head>
<title>������ͽӿ�</title>
</head>
<body>
<?php
abstract class Study{
	abstract function printStudy($name,$language);		//����һ�����󷽷�
}
class OneStudy extends Study{					//����OneStudy��̳���Study��
	function printStudy($name,$language){
		echo $name." ����ѧϰ".$language."����";			//���󷽷��ľ���ʵ��
	}
}
class TwoStudy extends Study{					//����TwoStudy��̳���Study��
	function printStudy($name,$language){
		echo $name." ����ѧϰ".$language."����";			//���󷽷��ľ���ʵ��
	}
}
$first=new OneStudy();						//��������first
$first->printStudy("Paul","PHP");
echo"<br>";
$second=new TwoStudy();						//��������second
$second->printStudy("Bob","JAVA");
?>
</body>
</html>
