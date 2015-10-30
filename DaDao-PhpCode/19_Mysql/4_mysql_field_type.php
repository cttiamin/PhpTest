<?php
//mysql_field_type 获取字段的数据类型
//mysql_free_result() 释放结果集内存

$db_host="localhost";
$db_user="root";
$db_psw="123456";
$db_name="sanyang";
$connection=mysql_connect($db_host,$db_user,$db_psw) or die ("服名器连接失败");
mysql_select_db($db_name,$connection)or die("选择数数据库失败");
$query="select * from employee";
$result=mysql_query($query) or die ("查询用户失败");


echo mysql_field_type($result,0);  //输出第一个字段数据类型
echo "<br>";
echo mysql_field_type($result,1);	//输出第二个字段数据类型
echo "<br>";
echo mysql_field_type($result,2);	//输出第二个字段数据类型
mysql_free_result($result);

mysql_close($connection);

?>