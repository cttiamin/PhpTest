<?php
	abstract class Study{
		abstract function printstudy($languages);
		function printName($name){
		echo "�ҵ�������:".$name;
		}
	}
	class OneStudy extends Study{
		function printstudy($languages){
		echo "������ѧϰ".$languages;
		}
	}
	$one=new OneStudy();
	$one->printName("tom");
	$one->printstudy("php");
?>