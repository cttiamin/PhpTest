<?php
include('adodb/adodb.inc.php');
$conn = ADONewConnection('mysql');//MySQL���ݿ�
$db_host="localhost";//����
$db_user="root";//�û���
$db_pass="123456";//����
$db_name="sanyang";//���ݿ���
$conn->Connect($db_host, $db_user, $db_pass, $db_name);//�������ݿ�
$query="select * from employee ";
$result=$conn->Execute($query);
print_r($result->FetchField('emp_id'))  ;//�ֶ�emp_id�ĵ���Ϣ
$conn->Close();
?>