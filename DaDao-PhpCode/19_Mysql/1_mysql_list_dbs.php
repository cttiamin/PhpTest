<?php
//mysql_list_dbs() 获得服务器中有多少个数据库
//mysql_fetch_object() 将结果集中的数据取出 ,返回对象
//mysql_fetch_row()		//返回数组
//mysql_fetch_array()	//返回数组

$db_host="localhost";
$db_user="root";
$db_psw="123456";
$db_name="sanyang";
$connection=mysql_connect($db_host,$db_user,$db_psw) or die ("服名器连接失败");
$db_list= mysql_list_dbs($connection);
while($row = mysql_fetch_object($db_list)){	
	echo $row->Database."<br>";
	echo "<hr>";
}
mysql_close($connection);

?>