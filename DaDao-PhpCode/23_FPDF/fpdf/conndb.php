<?php
$db_host="localhost";
$db_user="root";
$db_pass="root";
$db_name="sunyang";
$connection=mysql_connect($db_host,$db_user,$db_pass) or die("连接服务器失败");
mysql_select_db($db_name) or die("连接数据库失败");

?>
