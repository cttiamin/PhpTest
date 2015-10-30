<?php
include('adodb/adodb.inc.php');
$conn = ADONewConnection('mysql');//MySQL数据库
$conn->debug=true;		//开启调试功能
$db_host="localhost";//主机
$db_user="root";//用户名
$db_pass="123456";//密码
$db_name="sanyang";//数据库名
$conn->Connect($db_host, $db_user, $db_pass, $db_name);//连接数据库
$query="select * from employee ";
$result=$conn->Execute($query);
$conn->Close();
?>
