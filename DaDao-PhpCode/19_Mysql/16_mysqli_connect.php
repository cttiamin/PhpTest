<?php
//mysqli��������������ݿ�

$db_host='localhost';
$db_user='root';
$db_pws='123456';
$db_name='test';
$connection = mysqli_connect($db_host,$db_user,$db_pws,$db_name);
if( $connection){
	echo "���ݿ����ӳɹ�";
}else{
	echo "���ݿ�����ʧ��";
}

?>