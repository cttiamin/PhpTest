<html>
<head>
<title>�����жϺ���</title>
</head>
<body>
<?php
$balls= array(
	"����"=>"vollyball",
	"ƹ����"=>"pingpong",
	"����"=>"basketball"
	);
$boolean=array_key_exists("ƹ����",$balls);
if ($boolean){						//ȷ�������Ƿ���������
echo "ƹ���� ��������<br>";
}else{
echo "ƹ���� ����������<br>";
}
$boolean2=array_key_exists("����",$balls);
if ($boolean2){						//ȷ�������Ƿ���������
echo "���� ��������<br>";
}else{
echo "���� ����������<br>";
}

?>
</body>
</html>
