<?php

$db_host="localhost";
$db_user="root";
$db_psw="123456";
$db_name="sanyang";
$connection=mysql_connect($db_host,$db_user,$db_psw) or die ("����������ʧ��");
echo "��ǰ���ӵ��ַ��������ʽ:".mysql_client_encoding();//�ַ��������ʽ


?>
