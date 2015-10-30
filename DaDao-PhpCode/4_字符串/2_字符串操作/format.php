<?php
		// nl2br 将/n 格式化成 <br>
	$string="你好\n世界\n今天的天气真不错";
	echo nl2br($string)."<br>";	//将\n转换为浏览器识别的<br>换行
?>

<br>
<?php
	$text="this is a array long word";
	echo wordwrap($text,3,"\n<br>",true);
?>

<?php
$string=" welcome tO SUNYang ";					//定义字符串
$format1=strtolower($string);					//调用strtolower()函数格式化字符串
echo $format1;
echo "<br>";
$format2=strtoupper($string);					//调用strtoupper()函数格式化字符串
echo $format2;
echo "<br>";
$format3=ucwords($format1);						//调用ucwords()函数格式化字符串
echo $format3;
?>