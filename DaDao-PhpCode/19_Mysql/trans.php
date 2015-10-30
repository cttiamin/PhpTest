<?php
include('adodb/adodb.inc.php');
$conn = ADONewConnection('mysql');//MySQL数据库
$db_host="localhost";//主机
$db_user="root";//用户名
$db_pass="123456";//密码
$db_name="sanyang";//数据库名
$conn->Connect($db_host, $db_user, $db_pass, $db_name);//连接数据库
$query1="update employee set emp_age=30 where emp_id=1 ";
$query2="update employee set emp_age=35 where emp_id=3 ";
$conn->StartTrans();//开始事务
$conn->Execute($query1);
$conn->Execute($query2);
$conn->CompleteTrans();//结束事务
$conn->Close();
?>
