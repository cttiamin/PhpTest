<?php
//mysql_list_dbs() ��÷��������ж��ٸ����ݿ�
//mysql_fetch_object() ��������е�����ȡ�� ,���ض���
//mysql_fetch_row()		//��������
//mysql_fetch_array()	//��������

$db_host="localhost";
$db_user="root";
$db_psw="123456";
$db_name="sanyang";
$connection=mysql_connect($db_host,$db_user,$db_psw) or die ("����������ʧ��");
$db_list= mysql_list_dbs($connection);
while($row = mysql_fetch_object($db_list)){	
	echo $row->Database."<br>";
	echo "<hr>";
}
mysql_close($connection);

?>