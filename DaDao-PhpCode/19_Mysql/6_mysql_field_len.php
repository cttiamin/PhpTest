<?php
//mysql_field_len() 获得字段的长度

$db_host="localhost";
$db_user="root";
$db_psw="123456";
$db_name="sanyang";
$connection=mysql_connect($db_host,$db_user,$db_psw) or die ("服名器连接失败");
mysql_select_db($db_name,$connection)or die("选择数数据库失败");
$query="select * from employee";
$result=mysql_query($query) or die ("查询用户失败");

echo mysql_field_len($result,0);//第一个字段的长度
echo "<br>";
echo mysql_field_len($result,1);//第二个字段的长度
echo "<br>";
echo mysql_field_len($result,2);//第个字段的长度
echo "<br>";
echo mysql_field_len($result,3);//第四个字段的长度

mysql_free_result($result);

mysql_close($connection);

?>