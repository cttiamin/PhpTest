<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$db_name="sunyang";//���ݿ���
$connection=mysql_connect($db_host,$db_user,$db_psw) ;
mysql_select_db($db_name,$connection) ;
$query="select * from employee";
$result=mysql_query($query) or die("��ѯ����ʧ��");//ִ�в�ѯ
echo mysql_num_fields($result);//����ֶε���Ŀ
mysql_free_result($result);
mysql_close();
?>
