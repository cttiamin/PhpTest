<html>
<head>
<title>round:��������</title>
</head>
<body>
<?php
$floatNumber = 725.386;							//����һ��������
echo "ԭ������Ϊ��".$floatNumber;
echo "<br>";
$result1 = round($floatNumber);
echo "��С���㴦������������Ľ��Ϊ:".$result1;
echo "<br>";
$result2 = round($floatNumber,2);
echo "��С�������λ��������������Ľ��Ϊ:".$result2;
echo "<br>";
$result3 = round($floatNumber,-2);
echo "��С����ǰ��λ��������������Ľ��Ϊ:".$result3;
?>
</body>
</html>