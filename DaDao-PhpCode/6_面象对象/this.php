<?php
class people{
	var $name;
	public function say(){
		echo "我的名字是".$this->name;
	}
}
$user1=new people();
$user1->name="PHP高手";
$user1->say();
?>