<?php
//mysql_thread_id //返回当前线程ID

$db_host="localhost";
$db_user="root";
$db_psw="123456";
$db_name="sanyang";
$connection=mysql_connect($db_host,$db_user,$db_psw) or die ("服名器连接失败");

$thread_id = mysql_thread_id($connection);

//判断线程ID是否存在
if($thread_id){
	echo "当前线程ID：".$thread_id;		//输出当前线程ID
}


?>
