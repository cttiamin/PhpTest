<?php
$db = "sunyang.db";
$conn = sqlite_open($db) or die ("�޷������ݿ�");//��һ�����ݿ⣬�������򴴽�
$query="select * from employee";
$result=sqlite_unbuffered_query($conn, $query) or die("ִ�в�ѯʱ����");
	while ($row = sqlite_fetch_array($result)) {
		   echo $row[0] ."<br>" ;
		   echo $row[1] ."<br>" ;
		   echo $row[2] ."<br>" ;
		   echo $row[3] ."<br>" ;
		   echo "<hr>";
	}
sqlite_close($conn);
?>
