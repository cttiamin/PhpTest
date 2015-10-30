<?php
//mysql_num_fields();//输出数段的数目
//mysql_free_result() 释放结果集内存

$db_host="localhost";
$db_user="root";
$db_psw="123456";
$db_name="sanyang";
$connection=mysql_connect($db_host,$db_user,$db_psw) or die ("服名器连接失败");
mysql_select_db($db_name,$connection)or die("选择数数据库失败");
$query="select * from employee";
$result=mysql_query($query) or die ("查询用户失败");

echo mysql_num_fields($result);//输出数段的数目

mysql_free_result($result);

mysql_close($connection);

?>