<?php
try{
	$error="���ǻ���׸���";	
	throw new Exception($error);
	echo "���ﲻ�ᱻִ��";
}catch (Exception $e){
	echo "�����쳣".$e->getMessage();
}

?>