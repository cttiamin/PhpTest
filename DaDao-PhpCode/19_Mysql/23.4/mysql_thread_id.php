<?php
$db_host="localhost";//服务器
$db_user="root";//用户名
$db_psw="root";//密码
$connection=mysql_connect($db_host,$db_user,$db_psw)or die("连接服务器失败"); 
$thread_id = mysql_thread_id($connection);
//判断线程ID是否存在
if ($thread_id){
   echo "当前线程ID：".$thread_id;//输出当前线程ID
}
?>
