<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$db_name="sunyang";//���ݿ���
$connection=mysql_connect($db_host,$db_user,$db_psw) or die("���ӷ�����ʧ��");
mysql_select_db($db_name,$connection) or die("ѡ�����ݿ�ʧ��");
$query="delete from employee where emp_id=2";
if (mysql_query($query)) {	
echo "ɾ�����ݳɹ�����Ӱ�������:".mysql_affected_rows();
} else {
	echo "ɾ������ʧ��";
}
mysql_close($connection);
?>
