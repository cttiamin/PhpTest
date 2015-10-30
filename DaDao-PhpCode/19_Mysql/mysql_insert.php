<?
$db_host="localhost"; //服务器
$db_user="root";
$db_pws="123456";
$db_name="sunyang";
$connection=mysql_connect($db_host,$db_user,$db_pws)or die("连接服务器失败");
mysql_select_db($db_name,$connection)or die("选择数据库失败");
$query="insert into employee2 (emp_number,emp_name,emp_age) values ('sy0807','employee7',27)";
if(mysql_query($query)){
	echo "保存成功";
}else {
	echo "保存失败";
}
mysql_close($connection);
?>
