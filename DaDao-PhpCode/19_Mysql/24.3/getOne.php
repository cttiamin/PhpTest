<?php
include('adodb/adodb.inc.php');
$conn = ADONewConnection('mysql');//MySQL数据库
$db_host="localhost";//主机
$db_user="root";//用户名
$db_pass="root";//密码
$db_name="sunyang";//数据库名
$conn->Connect($db_host, $db_user, $db_pass, $db_name);//连接数据库
$query="select * from employee where emp_id=1";
$result=$conn->GetOne($query); //取得第一个字段的值
echo $result;
$conn ->Close();//关闭连接
?>
