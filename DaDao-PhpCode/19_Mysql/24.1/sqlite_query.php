<?php
$db = "sunyang.db";
$conn = sqlite_open($db) or die ("无法打开数据库");//打开一个数据库，不存在则创建
$query="select * from employee";
$result=sqlite_query($conn, $query) or die("执行查询时出错");
if (sqlite_num_rows($result)>0){//判断结果集中行的数目是否大于0
	while ($row = sqlite_fetch_array($result)) {//循环输出结果集
		   echo $row[0];
		   echo $row[1];
		   echo $row[2];
		   echo $row[3];
	}
}
