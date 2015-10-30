<?php
$db_host="localhost";//服务器
$db_user="root";//用户名
$db_psw="root";//密码
$db_name="sunyang";//数据库名
$connection=mysql_connect($db_host,$db_user,$db_psw) or die("连接服务器失败");
mysql_select_db($db_name,$connection) or die("选择数据库失败");
$query="update employee set emp_age=28 where emp_id=1";
if (mysql_query($query)) {	
echo "修改数据成功，受影响的行数：".mysql_affected_rows();
} else {
	echo "修改数据失败";
}
mysql_close($connection);
?>
