<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$connection=mysql_connect($db_host,$db_user,$db_psw) ;
echo "��ǰ���ӵ��ַ��������ʽ��".mysql_client_encoding ();//�ַ��������ʽ
?>
