<?php
	interface Animal{
		function makeSound();
	}
	
	class Dog implements Animal{
		function makeSound(){
			echo "这是狗的叫声";
		}
	}
	class Cat implements Animal{
		function makeSound(){
			echo "这是猫的叫声";
		}
	}
	function printRightSound($obj){
		if($obj instanceof Animal){  //判断是否属于Animal类,instanceof 判断是否属于一个类的类型
			$obj->makeSound();
		}else{
			echo "出现错误";
		}
	}
	printRightSound(new Cat());
	printRightSound(new Dog());
?>