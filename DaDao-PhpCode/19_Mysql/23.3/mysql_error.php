<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$db_name="mydb";//���ݿ���
$connection=mysql_connect($db_host,$db_user,$db_psw) ;
mysql_select_db($db_name,$connection) ;
echo "������Ϣ��".mysql_error();
?>
