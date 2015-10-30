<?php
include('adodb/adodb.inc.php');
$conn = ADONewConnection('mssql'); //Microsoft SQL Serve数据库
$db_host="localhost";//主机
$db_user="sa";//密码
$db_pass="sa";//用户名
$db_name="mydb";//数据库名
$testConn=$conn->Connect($db_host, $db_user, $db_pass, $db_name);//连接数据库
if ($testConn) {
	echo "连接成功";
}else {
echo "连接失败";
}
$conn -> Close();//关闭连接
?>
