<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$db_name="mysql";//���ݿ�
$connection=mysql_connect($db_host,$db_user,$db_psw)or die("���ӷ�����ʧ��"); 
echo "���ݿ�汾�ţ�".mysql_get_server_info();
?>
