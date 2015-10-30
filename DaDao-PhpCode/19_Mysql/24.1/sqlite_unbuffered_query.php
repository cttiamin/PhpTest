<?php
$db = "sunyang.db";
$conn = sqlite_open($db) or die ("无法打开数据库");//打开一个数据库，不存在则创建
$query="select * from employee";
$result=sqlite_unbuffered_query($conn, $query) or die("执行查询时出错");
	while ($row = sqlite_fetch_array($result)) {
		   echo $row[0] ."<br>" ;
		   echo $row[1] ."<br>" ;
		   echo $row[2] ."<br>" ;
		   echo $row[3] ."<br>" ;
		   echo "<hr>";
	}
sqlite_close($conn);
?>
