<?php
$db_host="localhost";//服务器
$db_user="root";//用户名
$db_psw="root";//密码
$db_name="sunyang";//数据库名
$connection=mysql_connect($db_host,$db_user,$db_psw) ;
mysql_select_db($db_name,$connection) ;
$query="select * from employee";
$result=mysql_query($query) or die("查询数据失败");//执行查询
echo mysql_field_len($result, 0);//第一个字段的长度

echo mysql_field_len($result, 1);//第二个字段的长度<br>

echo mysql_field_len($result, 2);//第三个字段的长度

echo mysql_field_len($result, 3);//第四个字段的长度
mysql_free_result($result);
mysql_close();
?> 
