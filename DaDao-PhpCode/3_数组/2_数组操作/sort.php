<html>
<head>
<title>����������</title>
</head>
<body>
<?php
$number=array(91,63,22,84,45,73,16);				//��������$number
echo"����ǰ�Ľ��Ϊ�� ";
foreach($number as $value){							//ʹ��foreachѭ���ṹ��������
	echo $value." ";
} 
echo "<br>";
echo"�����Ľ��Ϊ�� ";
sort($number); 										//ʹ��sort()������������$number
foreach($number as $value){							//ʹ��foreachѭ���ṹ��������
	echo $value." ";
} 
?>
</body>
</html>
