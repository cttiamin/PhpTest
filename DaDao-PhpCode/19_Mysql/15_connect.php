<?php
//mysqli��������������ݿ�

$db_host='localhost';//������
$db_user='root';	//�û���
$db_psw='123456';//����
$db_name='test';	//���ݿ�
$mysqli=new mysqli();
$mysqliconnection = $mysqli->connect($db_host,$db_user,$db_psw,$db_name);
if($mysqliconnection){
	echo "aa";
}else{
	echo "bb";
}
?>