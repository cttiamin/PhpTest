<?php
//sqlite_query
//sqlite_num_query

$db="sqlite_db/sanyang.db";
$conn=sqlite_open($db)or die("无法打开数据库");	//打开一个数据库，不存在创建
$query="select * from employee";
$result=sqlite_query($conn,$query)or die("执处查询时出错");
if(sqlite_num_rows($result)>0){
	while ($row = sqlite_fetch_array($result)){
		echo $row[0]."<br>";
		echo $row[1]."<br>";
		echo $row[2]."<br>";
		echo $row[3]."<br>";
	}
}

?>
