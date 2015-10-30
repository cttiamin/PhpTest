<?php
//连接数据库库
$db_host="127.0.0.1";
$db_user="root";
$db_pass="root";
$db_name="users";
$connection=mysql_connect($db_host,$db_user,$db_pass) or die("连接mysql失败");

if (mysql_select_db($db_name)) {
	
}else{
	 die("连接数据库失败");
}
?>