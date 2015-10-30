<?php
$db_host="localhost";//服务器
$db_user="root";//用户名
$db_psw="root";//密码
$db_name="sunyang";//数据库名
$connection=mysql_connect($db_host,$db_user,$db_psw) or die("连接服务器失败");
$tb_list = mysql_list_tables($db_name);
while ($row= mysql_fetch_row($tb_list)) {
    echo $row[0]."<br>";
    echo "<hr>";
}
mysql_close($connection);
?>
