<?php
session_start();

$p_code  = strtoupper($_POST['code']);

if($p_code == $_SESSION['code']){
	echo "��֤������ɹ�";
}else{
	echo "<script>alert('��֤�����');history.go(-1);</script>";
	exit();
}

echo "<div style='border:solid 2px #dcdcdc;background:yellow;position:absolute;left:80px;left:200px;'>��¼�ɹ�</div>";
