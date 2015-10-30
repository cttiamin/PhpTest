<?php
//mysql_stat() 返回服务器状态

$db_host="localhost";
$db_user="root";
$db_psw="123456";
$db_name="sanyang";
$connection=mysql_connect($db_host,$db_user,$db_psw) or die ("服名器连接失败");
$status = explode('  ',mysql_stat($connection)); //转换成数组
print_r($status);
/*Array (
[0] => Uptime: 36842		//正常运行时间
[1] => Threads: 1			//线程
[2] => Questions: 1343		//执行的查询
[3] => Slow queries: 0		//缓慢的查询
[4] => Opens: 0				//以打开的数据表
[5] => Flush tables: 1		//刷新的表
[6] => Open tables: 0		//当前打开的表
[7] => Queries per second avg: 0.036 )		//每秒的平均查询数

*/

?>
