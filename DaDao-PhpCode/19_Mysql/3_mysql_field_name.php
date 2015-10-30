<?php
//mysql_field_name() //获得表中字段

$db_host="localhost";
$db_user="root";
$db_psw="123456";
$db_name="sanyang";
$connection=mysql_connect($db_host,$db_user,$db_psw) or die ("服名器连接失败");
mysql_select_db($db_name,$connection)or die("选择数数据库失败");
$query="select * from employee";
$result=mysql_query($query) or die ("查询用户失败");

echo mysql_field_name($result,0);  //输出第一个字段
echo "<br>";
echo mysql_field_name($result,1);	//输出第二个字 段

mysql_close($connection);

?>