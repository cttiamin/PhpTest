<?php
$db_host="localhost";
$db_user="root";
$db_pass="root";
$db_name="sunyang";
$connection=mysql_connect($db_host,$db_user,$db_pass) or die("连接服务器失败");
mysql_select_db($db_name) or die("连接数据库失败");
$query="select * from sale";
$result=mysql_query($query) or die("查询用户失败");
if (mysql_num_rows($result)>0) {
while($row =mysql_fetch_row($result) ){
echo ($row[0])."<br>";
echo ($row[1])."<br>";
echo ($row[2])."<br>";
echo ($row[3])."<br>";
echo ($row[4])."<br>";
echo ($row[5])."<br>";
}
}

mysql_query($query) or die("查询用户失败");

mysql_free_result($result);
mysql_close($connection);
?>
