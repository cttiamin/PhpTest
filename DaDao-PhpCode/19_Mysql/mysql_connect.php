<?php
$db_host="localhost";
$db_user="root";
$db_pws="123456";
//$db_dataabase="test";
@$connection = mysql_connect($db_host,$db_user,$db_pws);
if(!$connection){
	die('连接失败');
}
echo '连接mysql服务器成功';
mysql_close($connection);
?>