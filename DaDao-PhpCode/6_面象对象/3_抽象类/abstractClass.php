<?php
	abstract class Study{
		abstract function printstudy($languages);
		function printName($name){
		echo "我的名字是:".$name;
		}
	}
	class OneStudy extends Study{
		function printstudy($languages){
		echo "我正在学习".$languages;
		}
	}
	$one=new OneStudy();
	$one->printName("tom");
	$one->printstudy("php");
?>