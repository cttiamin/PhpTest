<html>
<head>
<title>����������</title>
</head>
<body>
<?php
$languages['Tom'] = "PHP";					//�����������$languages
$languages['Paul'] = "JAVA";
$languages['Lily'] = "C++";
echo"����ǰ�Ľ��Ϊ��";
foreach($languages as $key=>$value){ 		//ʹ��foreachѭ���ṹ��������
	echo "$key-$value  ";
}
echo "<br>";
asort($languages); 							//ʹ��asort()������������дӵ͵�������
echo"�����Ľ��Ϊ��";
foreach($languages as $key=>$value){ 		//ʹ��foreachѭ���ṹ��������
	echo "$key-$value  ";
}
?>
</body>
</html>
