<?php
//mysql_list_tables() ������ݿ��ڵ����б�

$db_host="localhost";
$db_user="root";
$db_psw="123456";
$db_name="sanyang";
$connection=mysql_connect($db_host,$db_user,$db_psw) or die ("����������ʧ��");
$db_list= mysql_list_tables($db_name);
while($row = mysql_fetch_row($db_list)){	
	echo $row[0]."<br>";
	echo "<hr>";
}
mysql_close($connection);

?>