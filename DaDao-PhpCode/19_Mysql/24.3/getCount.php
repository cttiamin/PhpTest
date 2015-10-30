<?php
include('adodb/adodb.inc.php');
$conn = ADONewConnection('mysql');//MySQL数据库
$db_host="localhost";//主机
$db_user="root";//用户名
$db_pass="root";//密码
$db_name="sunyang";//数据库名
$conn->Connect($db_host, $db_user, $db_pass, $db_name);//连接数据库
$query="select * from employee ";
$result=$conn->Execute($query);
echo $result->RecordCount();//行的的个数
echo "<br>";
echo $result->FieldCount();//字段的个数
$conn->Close();
?>
