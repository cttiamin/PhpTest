<html>
<head>
<title>PHP���ú���</title>
</head>
<body>
<?php
$sunyang = "����Ƽ�";
if(empty($sunyang)){ 							//�жϱ���$sunyang�Ƿ�Ϊ��ֵ
	echo "\$sunyangΪ0���߿�ֵ";
	echo "<br>";
}else{
	echo "\$sunyang��ֵΪ\"".$sunyang."\"";
	echo "<br>";
}
$null = "";
if(empty($null)){ 								//�жϱ���$null�Ƿ�Ϊ��ֵ
	echo "\$nullΪ0���߿�ֵ";
	echo "<br>";
}else{
	echo "\$null��ֵΪ\"".$null."\"";
	echo "<br>";
}
$zero=0;
if (empty($zero)){								//�жϱ���$zero�Ƿ�Ϊ��ֵ
	echo "\$zeroΪ0���߿�ֵ";
	echo "<br>";
}else{
	echo "\$zero��ֵΪ".$zero;
	echo "<br>";
}
?>
</body>
</html>
