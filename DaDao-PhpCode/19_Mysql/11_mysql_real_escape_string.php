<?php
//mysql_real_escape_string() �����ַ���ת�壬�ɷ�ֹ sqlע��

$db_host="localhost";
$db_user="root";
$db_psw="123456";
$db_name="sanyang";
$connection=mysql_connect($db_host,$db_user,$db_psw) or die ("����������ʧ��");
$db_list= mysql_list_dbs($connection);

$person = "Jone's and Bobo's theacher";
$escaped_person=mysql_real_escape_string($person);
echo $escaped_person;

?>
