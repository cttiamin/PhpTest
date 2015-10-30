<?php
$db_host="localhost";//服务器
$db_user="root";//用户名
$db_psw="root";//密码
$connection=mysql_connect($db_host,$db_user,$db_psw) ;
echo "当前连接的字符集编码格式：".mysql_client_encoding ();//字符集编码格式
?>
