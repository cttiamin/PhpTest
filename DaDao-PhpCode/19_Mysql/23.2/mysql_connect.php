<?php
$db_host="localhost";//服务器
$db_user="root";//用户名
$db_psw="root";//密码
$connection=mysql_connect($db_host,$db_user,$db_psw); 
if (!$connection) {
    die('连接MySQL服务器失败');
}
echo '连接MySQL服务器成功';
mysql_close($connection);
?> 
