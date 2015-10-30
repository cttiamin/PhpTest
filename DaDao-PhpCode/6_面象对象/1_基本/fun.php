<?php
class People{
		var $name;
		var $sex;
		var $birthday;
		
		function __construct(){
			$this->name=$name;
			$this->sex=$sex;
			$this->birthday=$birthday;
		}
		function say(){
	echo "my name is".$this->name."my sex is".$this->sex."my birthday is".$this->birthday;
	}

		function __destruct(){
		echo "这里调用了析构方法<br>";
		}
}
$p1=new people("张三","男","1987-05-30");
$p1->say();
echo "<br>";
$p2=new people("李四","男","1982-12-09");
$p2->say();
echo "<br>";
	
?>