<?php
$db_host="localhost";//服务器
$db_user="root";//用户名
$db_psw="root";//密码
$db_name="sunyang";//数据库名
$connection=mysql_connect($db_host,$db_user,$db_psw) or die("连接服务器失败");
mysql_select_db($db_name,$connection) or die("选择数据库失败");
$query="insert into employee (emp_number,emp_name,emp_age) values 
					  ('sy0804','employee4',27)";
if (mysql_query($query)) {
echo "保存数据成功";	
} else {
	echo "保存数据失败";
}
mysql_close($connection);
?>
