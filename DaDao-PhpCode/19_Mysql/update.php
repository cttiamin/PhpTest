<?php
$db_host="localhost"; //������
$db_user="root";
$db_pws="123456";
$db_name="sunyang";
$connection=mysql_connect($db_host,$db_user,$db_pws)or die("���ӷ�����ʧ��");
mysql_select_db($db_name,$connection)or die("ѡ�����ݿ�ʧ��");
$query="update employee2 set emp_age=27 where emp_id=1";

if(mysql_query($query)){
	echo "�޸ĳɹ���Ӱ������".mysql_affected_rows(); 
}else {
	echo "�޸�ʧ��";
}
mysql_close($connection);

?>
