<html>
<head>
<title>�쳣����</title>
</head>
<body>
<?php
try{
	$num=0;
	if($num==0){								//�жϳ����Ƿ�Ϊ��
		throw new Exception();						//�׳��쳣
	}else {
		echo 50/$num;
	}	
}catch(Exception $e){								//���񲢴����쳣
	echo "��������Ϊ��,�����Ϊ����ֵ";
}
?>

</body>
</html>