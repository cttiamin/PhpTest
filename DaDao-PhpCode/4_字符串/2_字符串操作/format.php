<?php
		// nl2br ��/n ��ʽ���� <br>
	$string="���\n����\n����������治��";
	echo nl2br($string)."<br>";	//��\nת��Ϊ�����ʶ���<br>����
?>

<br>
<?php
	$text="this is a array long word";
	echo wordwrap($text,3,"\n<br>",true);
?>

<?php
$string=" welcome tO SUNYang ";					//�����ַ���
$format1=strtolower($string);					//����strtolower()������ʽ���ַ���
echo $format1;
echo "<br>";
$format2=strtoupper($string);					//����strtoupper()������ʽ���ַ���
echo $format2;
echo "<br>";
$format3=ucwords($format1);						//����ucwords()������ʽ���ַ���
echo $format3;
?>