<?php
	interface Animal{
		function makeSound();
	}
	
	class Dog implements Animal{
		function makeSound(){
			echo "���ǹ��Ľ���";
		}
	}
	class Cat implements Animal{
		function makeSound(){
			echo "����è�Ľ���";
		}
	}
	function printRightSound($obj){
		if($obj instanceof Animal){  //�ж��Ƿ�����Animal��,instanceof �ж��Ƿ�����һ���������
			$obj->makeSound();
		}else{
			echo "���ִ���";
		}
	}
	printRightSound(new Cat());
	printRightSound(new Dog());
?>