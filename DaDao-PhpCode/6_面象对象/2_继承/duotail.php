<?php
	class Animal{
		function makeSound(){
			echo "这是一个发声的方法";
		}
	}
	class Dog extends Animal{
		function makeSound(){
			echo "这是狗的叫声";
		}
	}
	class Cat extends Animal{
		function makeSound(){
			echo "这是猫的叫声";
		}
	}
	
	function printRightSound($obj){
		if($obj instanceof Animal){ //判断是否属于Animal类,instanceof 判断是否属于一个类的类型
			$obj->makeSound();
		}else{
			echo "出现错误";
		}
	}
	printRightSound(new Dog());
	printRightSound(new Cat());
	
	
?>