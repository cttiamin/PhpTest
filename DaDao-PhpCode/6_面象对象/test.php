<?php
class people{
	var $name;
	function __construct($name){
		$this->name=$name;
		
	}
	public function say(){
		echo "���Ǹ����".$this->name;
	}
}
class student extends people{
	var $sex;
	function __construct($sex){
		parent::__construct("�ż���");
		$this->sex=$sex;
	}
	function study(){
		echo $this->name."����ѧϰPHP<br>";
	}
	public function say(){
		echo "���������".$this->sex;
	}
}
$student=new student("��");
$student->study();
$student->say();
echo "<br>";
$student1=new people("zjm");
$student1->say();

?>