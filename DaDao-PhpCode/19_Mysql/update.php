<?php
$db_host="localhost"; //服务器
$db_user="root";
$db_pws="123456";
$db_name="sunyang";
$connection=mysql_connect($db_host,$db_user,$db_pws)or die("连接服务器失败");
mysql_select_db($db_name,$connection)or die("选择数据库失败");
$query="update employee2 set emp_age=27 where emp_id=1";

if(mysql_query($query)){
	echo "修改成功受影响行数".mysql_affected_rows(); 
}else {
	echo "修改失败";
}
mysql_close($connection);

?>
