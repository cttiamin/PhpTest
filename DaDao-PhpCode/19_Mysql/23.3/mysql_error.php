<?php
$db_host="localhost";//服务器
$db_user="root";//用户名
$db_psw="root";//密码
$db_name="mydb";//数据库名
$connection=mysql_connect($db_host,$db_user,$db_psw) ;
mysql_select_db($db_name,$connection) ;
echo "错误信息：".mysql_error();
?>
