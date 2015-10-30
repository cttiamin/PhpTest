<?php
class people{
	var $name;
	function __construct($name){
		$this->name=$name;
		
	}
	public function say(){
		echo "这是父类的".$this->name;
	}
}
class student extends people{
	var $sex;
	function __construct($sex){
		parent::__construct("张佳明");
		$this->sex=$sex;
	}
	function study(){
		echo $this->name."我在学习PHP<br>";
	}
	public function say(){
		echo "这是子类的".$this->sex;
	}
}
$student=new student("男");
$student->study();
$student->say();
echo "<br>";
$student1=new people("zjm");
$student1->say();

?>