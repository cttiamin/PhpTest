<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$connection=mysql_connect($db_host,$db_user,$db_psw)or die("���ӷ�����ʧ��"); 
$status = explode('  ', mysql_stat($connection));//ת��������
print_r($status);//��ӡ��������
?>
