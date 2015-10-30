<?php
//mysql_error() 返回错误代码

$db_host="localhost";
$db_user="root";
$db_psw="123456";
$db_name="mydb";  //mydb这个数据库根本不存在
$connection=mysql_connect($db_host,$db_user,$db_psw) or die ("服名器连接失败");
mysql_select_db($db_name,$connection);


echo "错误信息:".mysql_errno();

?>
