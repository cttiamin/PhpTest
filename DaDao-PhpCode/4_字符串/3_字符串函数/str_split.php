<?php
		
		//str_split ���ַ���ƽ���ָ�Ϊ����
	$str="hellohellohellohellohello";
	$array=str_split($str,5); 
	print_r($array);
	
	
	//�з���ϲ��ַ���
	$string="sunyangsunyangsunyang";
	$split_length=7;
	$split=str_split($string,$split_length);//���ַ���ƽ�����зֳɳ���Ϊ7�����ַ���
	print_r($split); 
?>