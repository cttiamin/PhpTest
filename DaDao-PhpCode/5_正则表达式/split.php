<?php
		//�ָ�
	$string="3*8+i/9-23";
	$array1=split("[*+/-]",$string);
	$array2=split("[*+/-]",$string,3);
	print_r($array1);
	echo "<br>";
	print_r($array2);
	echo "<br>";
	
	$date1="04/25/1997";
	$date2="2008-08-08";
	list($month,$day,$year)=split("[/-]",$date1);
	list($year2,$month2,$day2)=split("[/.-]",$date1);
	echo "�·�:".$month."����:".$day."���:".$year;
	echo "<br>";
	echo "���:".$year ."���ڣ�".$day."�·�:".$month;
?>