<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$db_name="sunyang";//���ݿ���
$connection=mysql_connect($db_host,$db_user,$db_psw) or die("���ӷ�����ʧ��");
mysql_select_db($db_name,$connection) or die("ѡ�����ݿ�ʧ��");
$query="select * from employee";
$result=mysql_query($query) or die("��ѯ�û�ʧ��");
echo mysql_field_name($result,0);//�����һ���ֶ���
echo "<br>";
echo mysql_field_name($result,1);//����ڶ����ֶ���
mysql_close($connection); 
?>
