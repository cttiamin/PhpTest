<?php
class people{
	var $name;
	public function say(){
		echo "�ҵ�������".$this->name;
	}
}
$user1=new people();
$user1->name="PHP����";
$user1->say();
?>