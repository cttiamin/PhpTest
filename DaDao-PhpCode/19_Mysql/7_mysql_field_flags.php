<?php
//mysql_field_flags ��ȡ�ֶε�����

$db_host="localhost";
$db_user="root";
$db_psw="123456";
$db_name="sanyang";
$connection=mysql_connect($db_host,$db_user,$db_psw) or die ("����������ʧ��");
mysql_select_db($db_name,$connection)or die("ѡ�������ݿ�ʧ��");
$query="select * from employee";
$result=mysql_query($query) or die ("��ѯ�û�ʧ��");

echo mysql_field_flags($result,0);//��һ���ֶε�����
echo "<br>";
echo mysql_field_flags($result,1);//�ڶ����ֶε�����
echo "<br>";
echo mysql_field_flags($result,2);//�ڸ��ֶε�����
echo "<br>";
echo mysql_field_flags($result,3);//���ĸ��ֶε�����

mysql_free_result($result);

mysql_close($connection);

?>