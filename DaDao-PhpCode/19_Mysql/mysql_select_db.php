<?php
$db_host="localhost"; //������
$db_user="root";
$db_pws="123456";
$db_name="sunyang";
$connection=mysql_connect($db_host,$db_user,$db_pws)or die("���ӷ�����ʧ��");
mysql_select_db($db_name,$connection);
echo "ѡ�����ݿ�ɹ�";
mysql_close($connection);
?>