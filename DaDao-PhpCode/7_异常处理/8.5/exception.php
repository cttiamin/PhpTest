<html>
<head>
<title>�쳣����</title>
</head>
<body>
<?php
try{
	$num=0;
	if($num==0){
		$errmsg="��������Ϊ��,�����Ϊ����ֵ";
		throw new Exception($errmsg);
	}else {
		echo 50/$num;
	}
}catch(Exception $e){
	echo "����ԭ��".$e->getMessage();
	echo "<br>";
	echo "�����ļ�·����". $e-> getFile();
	echo "<br>";
	echo "��������кţ�".$e-> getLine();
}
?>
</body>
</html>