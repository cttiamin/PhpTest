<?php
$db_host="localhost";
$db_user="root";
$db_pws="123456";
//$db_dataabase="test";
@$connection = mysql_connect($db_host,$db_user,$db_pws);
if(!$connection){
	die('����ʧ��');
}
echo '����mysql�������ɹ�';
mysql_close($connection);
?>