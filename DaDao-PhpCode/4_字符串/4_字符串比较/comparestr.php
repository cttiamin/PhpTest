<?php
	
	$string1="zjmphp";
	$string2="Zjmphp hello";
	
	if($string1==$string2){
	echo "�������ַ������";
	}else{
		echo "�����������";
	}
?>
<br>
<?php
	$flages=strcmp($string1,$string2);
	if($flages==0){
	echo "�������ַ������";
	}else if($flages>0){
	echo "��һ���ַ����Ƚϴ�";
	}else if($flages<0){
	echo "�ڶ����ַ����Ƚϴ�";
	}
?>
<br>
<?php
	$flages=strcasecmp($string1,$string2);
	if($flages==0){
	echo "�������ַ������";
	}else if($flages>0){
	echo "��һ���ַ����Ƚϴ�";
	}else if($flages<0){
	echo "�ڶ����ַ����Ƚϴ�";
	}
?>
<br>
<?php
	$flages=strncmp($string1,$string2,4);
	if($flages==0){
	echo "�������ַ������";
	}else if($flages>0){
	echo "��һ���ַ����Ƚϴ�";
	}else if($flages<0){
	echo "�ڶ����ַ����Ƚϴ�";
	}
?>
<br>
<?php
	$flages=strncasecmp($string1,$string2,4);
	if($flages==0){
	echo "�������ַ������";
	}else if($flages>0){
	echo "��һ���ַ����Ƚϴ�";
	}else if($flages<0){
	echo "�ڶ����ַ����Ƚϴ�";
	}
?>
