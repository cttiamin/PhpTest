<?php
include('adodb/adodb.inc.php');
$conn = ADONewConnection('mysql');//MySQL数据库
$db_host="localhost";//主机
$db_user="root";//用户名
$db_pass="123456";//密码
$db_name="sanyang";//数据库名
$conn->Connect($db_host, $db_user, $db_pass, $db_name);//连接数据库
$query="select * from employee";
$result=$conn->GetAll($query);//获取所有记录
foreach ($result as $row) {
    print_r($row);
}
$conn -> Close();//关闭连接
?>
