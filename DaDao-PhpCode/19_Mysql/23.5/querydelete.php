<?php
$db_host="localhost";//服务器
$db_user="root";//用户名
$db_psw="root";//密码
$db_name="sunyang";//数据库名
$mysqli=new mysqli($db_host,$db_user,$db_psw,$db_name)  ;
$query="delete from employee where emp_id=2";
$result=$mysqli->query($query);
if ($result){
	echo "删除操作执行成功";
}else {
	echo "删除操作执行失败";
}
$mysqli->close();
?>
