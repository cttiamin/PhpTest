<?php
$db_host="localhost"; //服务器
$db_user="root";
$db_pws="123456";
$db_name="sunyang";
$connection=mysql_connect($db_host,$db_user,$db_pws)or die("连接服务器失败");
mysql_select_db($db_name,$connection);
echo "选择数据库成功";
mysql_close($connection);
?>