<html>
<head>
<title>�����жϺ���</title>
</head>
<body>
<?php
$names = array("Peter", "Tom", "Paul", "Bob");
$boolean=in_array("peter",$names,true);
if ($boolean){						//ȷ��Ԫ���Ƿ���������
echo "peter ��������<br>";
}else{
echo "peter ����������<br>";
}
$boolean2=in_array("Tom",$names,true);
if ($boolean2){						//ȷ��Ԫ���Ƿ���������
echo "Tom ��������<br>";
}else{
echo "Tom ����������<br>";
}
?>
</body>
</html>
