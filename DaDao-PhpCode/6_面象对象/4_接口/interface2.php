<?php
	interface IsSunYang{
		function setName($name);
		function getName();
	}
	abstract class ASunYang implements IsSunYang{
		function setName($name){
		$this->name=$name;
		}
		function getName(){
		echo $this->name;
		}
		abstract function printName();
	}
	class SunYang extends ASunYang{
		function printName(){
			echo "";
		}
		
	}
	$sunyang=new SunYang();
	$sunyang->setname("¼ªÁÖ");
	$sunyang->getname();
	
?>
