<?php
//mysql_field_len() ����ֶεĳ���

$db_host="localhost";
$db_user="root";
$db_psw="123456";
$db_name="sanyang";
$connection=mysql_connect($db_host,$db_user,$db_psw) or die ("����������ʧ��");
mysql_select_db($db_name,$connection)or die("ѡ�������ݿ�ʧ��");
$query="select * from employee";
$result=mysql_query($query) or die ("��ѯ�û�ʧ��");

echo mysql_field_len($result,0);//��һ���ֶεĳ���
echo "<br>";
echo mysql_field_len($result,1);//�ڶ����ֶεĳ���
echo "<br>";
echo mysql_field_len($result,2);//�ڸ��ֶεĳ���
echo "<br>";
echo mysql_field_len($result,3);//���ĸ��ֶεĳ���

mysql_free_result($result);

mysql_close($connection);

?>