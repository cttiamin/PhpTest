<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$db_name="sunyang";//���ݿ���
$connection=mysql_connect($db_host,$db_user,$db_psw) or die("���ӷ�����ʧ��");
mysql_select_db($db_name,$connection) or die("ѡ�����ݿ�ʧ��");
$query="update employee set emp_age=28 where emp_id=1";
if (mysql_query($query)) {	
echo "�޸����ݳɹ�����Ӱ���������".mysql_affected_rows();
} else {
	echo "�޸�����ʧ��";
}
mysql_close($connection);
?>
