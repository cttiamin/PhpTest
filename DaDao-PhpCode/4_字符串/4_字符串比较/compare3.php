<html>
<head>
<title>�ַ����ıȽ�</title>
</head>
<body>
<?php
$string1="sunyang";
$string2="sun";
$len=3;
$flag=strncmp($string1,$string2,$len);						//�Ƚ��ַ���
if($flag==0){									//�ж��ַ����Ĵ�С
echo $string1." �� ".$string2." ���";
}elseif($flag>0){
echo $string1." ���� ".$string2;
}elseif($flag<0){
echo $string1." С�� ".$string2;
}
?>
</body>
</html>
