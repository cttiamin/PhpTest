<?php
include('adodb/adodb.inc.php');
$conn = ADONewConnection('mysql');//MySQL���ݿ�
$db_host="localhost";//����
$db_user="root";//�û���
$db_pass="123456";//����
$db_name="sanyang";//���ݿ���
$conn->Connect($db_host, $db_user, $db_pass, $db_name);//�������ݿ�
$query1="update employee set emp_age=30 where emp_id=1 ";
$query2="update employee set emp_age=35 where emp_id=3 ";
$conn->StartTrans();//��ʼ����
$conn->Execute($query1);
$conn->Execute($query2);
$conn->CompleteTrans();//��������
$conn->Close();
?>
