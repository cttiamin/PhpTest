<?php
//�������ݿ��
$db_host="127.0.0.1";
$db_user="root";
$db_pass="root";
$db_name="users";
$connection=mysql_connect($db_host,$db_user,$db_pass) or die("����mysqlʧ��");

if (mysql_select_db($db_name)) {
	
}else{
	 die("�������ݿ�ʧ��");
}
?>