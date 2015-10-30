<?php
$db_host="localhost";//服务器
$db_user="root";//用户名
$db_psw="root";//密码
$connection=mysql_connect($db_host,$db_user,$db_psw)or die("连接服务器失败"); 
$status = explode('  ', mysql_stat($connection));//转换成数组
print_r($status);//打印数组内容
?>
