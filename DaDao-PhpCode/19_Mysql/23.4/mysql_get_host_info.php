<?php
$db_host="localhost";//服务器
$db_user="root";//用户名
$db_psw="root";//密码
$db_name="mysql";//数据库
$connection=mysql_connect($db_host,$db_user,$db_psw)or die("连接服务器失败"); 
echo "数据库连接类型：".mysql_get_host_info();
?>
