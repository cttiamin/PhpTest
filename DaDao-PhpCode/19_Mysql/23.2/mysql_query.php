<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$db_name="sunyang";//���ݿ���
$connection=mysql_connect($db_host,$db_user,$db_psw) or die("���ӷ�����ʧ��");
mysql_select_db($db_name,$connection) or die("ѡ�����ݿ�ʧ��");
$query="insert into employee (emp_number,emp_name,emp_age) values 
					  ('sy0804','employee4',27)";
if (mysql_query($query)) {
echo "�������ݳɹ�";	
} else {
	echo "��������ʧ��";
}
mysql_close($connection);
?>
