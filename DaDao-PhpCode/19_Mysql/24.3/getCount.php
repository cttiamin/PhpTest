<?php
include('adodb/adodb.inc.php');
$conn = ADONewConnection('mysql');//MySQL���ݿ�
$db_host="localhost";//����
$db_user="root";//�û���
$db_pass="root";//����
$db_name="sunyang";//���ݿ���
$conn->Connect($db_host, $db_user, $db_pass, $db_name);//�������ݿ�
$query="select * from employee ";
$result=$conn->Execute($query);
echo $result->RecordCount();//�еĵĸ���
echo "<br>";
echo $result->FieldCount();//�ֶεĸ���
$conn->Close();
?>
