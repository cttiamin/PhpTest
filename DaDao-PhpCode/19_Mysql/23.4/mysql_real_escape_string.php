<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
mysql_connect($db_host,$db_user,$db_psw)or die("���ӷ�����ʧ��"); 
$person= "Jone's and Bobo's teacher";
$escaped_person= mysql_real_escape_string($person);
echo $escaped_person;
?>
