<html>
<head>
<title>����������</title>
</head>
<body>
<?php
$balls=array(							//ʹ��array�ṹ��������
	4=>"ƹ����",
	1=>"����",
	3=>"��ë��",
	6=>"����",
);						
echo "����ǰ�Ľ��Ϊ��";
foreach($balls as $key=>$value){ 			//ʹ��foreachѭ���ṹ��������
	echo "$key-$value  ";
} 
echo "<br>";
ksort($balls);							//ʹ��ksort()������������дӵ͵�������
echo"�����Ľ��Ϊ��";
foreach($balls as $key=>$value){ 			//ʹ��foreachѭ���ṹ��������
	echo "$key-$value  ";
} 
?>
</body>
</html>
