<?php
$db = "sunyang.db";
$conn = sqlite_open($db) or die ("�޷������ݿ�");//��һ�����ݿ⣬�������򴴽�
$query="select * from employee";
$result=sqlite_query($conn, $query) or die("ִ�в�ѯʱ����");
if (sqlite_num_rows($result)>0){//�жϽ�������е���Ŀ�Ƿ����0
	while ($row = sqlite_fetch_array($result)) {//ѭ����������
		   echo $row[0];
		   echo $row[1];
		   echo $row[2];
		   echo $row[3];
	}
}
