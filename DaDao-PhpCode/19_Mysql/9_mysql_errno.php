<?php
//mysql_error() ���ش������

$db_host="localhost";
$db_user="root";
$db_psw="123456";
$db_name="mydb";  //mydb������ݿ����������
$connection=mysql_connect($db_host,$db_user,$db_psw) or die ("����������ʧ��");
mysql_select_db($db_name,$connection);


echo "������Ϣ:".mysql_errno();

?>
