<?php
$db_host="localhost"; //������
$db_user="root";
$db_pws="123456";
$db_name="sunyang";
$connection=mysql_connect($db_host,$db_user,$db_pws)or die("���ӷ�����ʧ��");
mysql_select_db($db_name,$connection)or die("ѡ�����ݿ�ʧ��");
$query="delete from employee where emp_id=2";

if(mysql_query($query)){
	echo "ɾ���ɹ���Ӱ������".mysql_affected_rows(); 
}else {
	echo "ɾ��ʧ��";
}
mysql_close($connection);

?>