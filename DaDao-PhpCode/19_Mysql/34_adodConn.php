<?php
include('adodb/adodb.inc.php');
$conn = ADONewConnection('mysql');//MySQL���ݿ�
$db_host="localhost";//����
$db_user="root";//�û���
$db_pass="123456";//����
$db_name="sanyang";//���ݿ���
$testConn =$conn ->Connect($db_host, $db_user, $db_pass, $db_name);//�������ݿ�
if ($testConn) {
	echo "���ӳɹ�";
}else {
echo "����ʧ��";
}
?>