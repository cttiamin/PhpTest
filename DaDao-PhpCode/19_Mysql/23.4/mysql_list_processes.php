<?php
$db_host="localhost";//服务器
$db_user="root";//用户名
$db_psw="root";//密码
$db_name="mysql";//数据库
$connection=mysql_connect($db_host,$db_user,$db_psw)or die("连接服务器失败"); 
mysql_select_db($db_name,$connection) or die("选择数据库失败");
$result = mysql_list_processes($connection);//取得进程信息
while ($row = mysql_fetch_array($result)){
	echo $row["Id"]."<br>";//进程ID
	echo $row["User"]."<br>";//用户
	echo $row["Host"]."<br>";//主机
    echo $row["db"]."<br>";//数据库
    echo $row["Command"]."<br>";//执行的命令
    echo $row["Time"]."<br>"; //执行的时间
}
mysql_free_result ($result);
?>
