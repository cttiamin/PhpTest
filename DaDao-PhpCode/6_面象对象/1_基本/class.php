<?php

	class People{
		var $name;
		var $sex;
		public function study(){
			echo "������ѧϰPHP�������";
			echo $this->name.$this->sex;
			
		}
	}
	
	$Lily=new People();
	$Lily->name="Lily";
	$Lily->sex="Ů";
	$Lily->study();
	
	$Tom=new People();
	$Tom->name="Tom";
	$Tom->sex="��";
	$Tom->study();
	
	
?>