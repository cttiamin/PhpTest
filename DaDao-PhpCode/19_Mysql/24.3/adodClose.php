<?php
include('adodb/adodb.inc.php');
$conn = ADONewConnection('mssql'); //Microsoft SQL Serve���ݿ�
$db_host="localhost";//����
$db_user="sa";//����
$db_pass="sa";//�û���
$db_name="mydb";//���ݿ���
$testConn=$conn->Connect($db_host, $db_user, $db_pass, $db_name);//�������ݿ�
if ($testConn) {
	echo "���ӳɹ�";
}else {
echo "����ʧ��";
}
$conn -> Close();//�ر�����
?>
