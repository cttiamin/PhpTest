<?
$db_host="localhost"; //������
$db_user="root";
$db_pws="123456";
$db_name="sunyang";
$connection=mysql_connect($db_host,$db_user,$db_pws)or die("���ӷ�����ʧ��");
mysql_select_db($db_name,$connection)or die("ѡ�����ݿ�ʧ��");
$query="insert into employee2 (emp_number,emp_name,emp_age) values ('sy0807','employee7',27)";
if(mysql_query($query)){
	echo "����ɹ�";
}else {
	echo "����ʧ��";
}
mysql_close($connection);
?>
