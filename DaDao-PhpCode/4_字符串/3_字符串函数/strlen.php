<?php
	$str="123456789";
	$a="�й�";
	
	echo strlen($str);
	echo "<br>";
	echo strlen($a);
	
?>
<?php
$string1="����Ƽ�";
echo $string1." �ĳ���Ϊ:";
echo strlen($string1)."<br>";			//������Ϊ6
$string2="A B CD"; 
echo $string2." �ĳ���Ϊ:";
echo strlen($string2);					//������Ϊ5
?>