<?php
//sqlite_unbuffered_query	��ȡ�����,����һ��
//sqlite_num_query

$db="sqlite_db/sanyang.db";
$conn=sqlite_open($db)or die("�޷������ݿ�");	//��һ�����ݿ⣬�����ڴ���
$query="select * from employee";
$result=sqlite_unbuffered_query($conn,$query)or die("ִ����ѯʱ����");

	while ($row = sqlite_fetch_array($result)){
		echo $row[0]."<br>";
		echo $row[1]."<br>";
		echo $row[2]."<br>";
		echo $row[3]."<br>";
		echo "<hr>";
	}
sqlite_close($conn);
?>
