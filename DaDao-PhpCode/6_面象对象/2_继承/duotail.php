<?php
	class Animal{
		function makeSound(){
			echo "����һ�������ķ���";
		}
	}
	class Dog extends Animal{
		function makeSound(){
			echo "���ǹ��Ľ���";
		}
	}
	class Cat extends Animal{
		function makeSound(){
			echo "����è�Ľ���";
		}
	}
	
	function printRightSound($obj){
		if($obj instanceof Animal){ //�ж��Ƿ�����Animal��,instanceof �ж��Ƿ�����һ���������
			$obj->makeSound();
		}else{
			echo "���ִ���";
		}
	}
	printRightSound(new Dog());
	printRightSound(new Cat());
	
	
?>