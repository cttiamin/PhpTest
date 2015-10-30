<?php
	class people{
		function addage($age){
			return $age+1;
		}
		function showage($age){
			echo "当前年龄为".$age;
			$result=self::addage($age);
			echo "调用addage静态成员方法后为$result";
		}
	}
	people::showage(99);
?>