<html>
<head>
<title>�ַ����Ĳ����봦��</title>
</head>
<body>
<?php
$haystack="Hello world & sunyang";
$handle="&";
$string=strstr($haystack,$handle);//����strstr()����
echo $string;			//���&��&֮�������
?>

<?php
		//strsrt ���俪ʼ���
	$str="hello world w orld world !";
	$result=stristr($str,"W orld");	//stristr ���Դ�Сд
	echo $result;
?>
</body>
</html>
