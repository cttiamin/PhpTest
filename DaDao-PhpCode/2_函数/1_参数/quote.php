<html>
<head>
<title>��������ҪԪ��--����</title>
</head>
<body>
<?php
function change($number) {
$number= $number + 1;						 	//ʹ����$number��ֵ����1
echo "�����ڲ�\$number��ֵΪ��".$number;			//�������$number��ֵ
echo "<br>";
}
$number=10;
change(&$number);								//����change()������number����
echo "�����ⲿ\$number��ֵΪ��".$number;			//�������$number��ֵ
?>
</body>
</html>
