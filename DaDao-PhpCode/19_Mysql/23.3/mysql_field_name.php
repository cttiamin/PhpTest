<?php
$db_host="localhost";//服务器
$db_user="root";//用户名
$db_psw="root";//密码
$db_name="sunyang";//数据库名
$connection=mysql_connect($db_host,$db_user,$db_psw) or die("连接服务器失败");
mysql_select_db($db_name,$connection) or die("选择数据库失败");
$query="select * from employee";
$result=mysql_query($query) or die("查询用户失败");
echo mysql_field_name($result,0);//输出第一个字段名
echo "<br>";
echo mysql_field_name($result,1);//输出第二个字段名
mysql_close($connection); 
?>
