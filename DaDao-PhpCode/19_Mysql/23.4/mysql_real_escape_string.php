<?php
$db_host="localhost";//服务器
$db_user="root";//用户名
$db_psw="root";//密码
mysql_connect($db_host,$db_user,$db_psw)or die("连接服务器失败"); 
$person= "Jone's and Bobo's teacher";
$escaped_person= mysql_real_escape_string($person);
echo $escaped_person;
?>
