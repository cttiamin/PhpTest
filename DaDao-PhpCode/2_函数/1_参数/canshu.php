<?php

$allnum=10;
function change($num){
	$num=$num+1;
	echo "�βε�ֵΪ��".$num."<br>";
}

change(&$allnum);		//����&��ʵ�λ���β�һ��ı�	
	echo "ʵ�ε�ֵΪ".$allnum;

?>