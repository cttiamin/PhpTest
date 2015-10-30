<?php
$db_host="localhost"; //服务器
$db_user="root";
$db_pws="123456";
$db_name="sunyang";
$connection=mysql_connect($db_host,$db_user,$db_pws)or die("连接服务器失败");
mysql_select_db($db_name,$connection)or die("选择数据库失败");
$query="delete from employee where emp_id=2";

if(mysql_query($query)){
	echo "删除成功受影响行数".mysql_affected_rows(); 
}else {
	echo "删除失败";
}
mysql_close($connection);

?>