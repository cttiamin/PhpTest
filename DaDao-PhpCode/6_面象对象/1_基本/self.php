<?php
	class people{
		function addage($age){
			return $age+1;
		}
		function showage($age){
			echo "��ǰ����Ϊ".$age;
			$result=self::addage($age);
			echo "����addage��̬��Ա������Ϊ$result";
		}
	}
	people::showage(99);
?>