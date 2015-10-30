<?php

	class People{
		var $name;
		var $sex;
		public function study(){
			echo "我正在学习PHP面象对象";
			echo $this->name.$this->sex;
			
		}
	}
	
	$Lily=new People();
	$Lily->name="Lily";
	$Lily->sex="女";
	$Lily->study();
	
	$Tom=new People();
	$Tom->name="Tom";
	$Tom->sex="男";
	$Tom->study();
	
	
?>