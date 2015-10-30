<?php
//mysql_list_processes 返回服务器进程信息
$db_host="localhost";
$db_user="root";
$db_psw="123456";
$db_name="sanyang";
$connection=mysql_connect($db_host,$db_user,$db_psw) or die ("服名器连接失败");
mysql_select_db($db_name,$connection);

$result = mysql_list_processes($connection);
while($row=mysql_fetch_array($result)){
	echo $row['Id']."<br>"; //进程ID
	echo $row['User']."<br>"; //用户
	echo $row['Host']."<br>"; //主机
	echo $row['db']."<br>"; //数据库
	echo $row['Command']."<br>"; //执行的命令
	echo $row['Time']."<br>"; //执行时间
}
mysql_free_result($result);

?>
