<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$db_name="sunyang";//���ݿ���
$connection=mysql_connect($db_host,$db_user,$db_psw) or die("���ӷ�����ʧ��");
mysql_select_db($db_name,$connection) or die("ѡ�����ݿ�ʧ��");
$query="select * from employee";
$query="select * from employee";
$result=mysql_query($query) or die("��ѯ�û�ʧ��");//ִ�в�ѯ
echo mysql_num_rows($result);//����������¼��
mysql_free_result($result);
mysql_close($connection);
?>
