<?php
include('adodb/adodb.inc.php');
$conn = ADONewConnection('mysql');//MySQL数据库
$db_host="localhost";//主机
$db_user="root";//用户名
$db_pass="root";//密码
$db_name="sunyang";//数据库名
$testConn =$conn ->Connect($db_host, $db_user, $db_pass, $db_name);//连接数据库
if ($testConn) {
	echo "连接成功";
}else {
echo "连接失败";
}
?>
