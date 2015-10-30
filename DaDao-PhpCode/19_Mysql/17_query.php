<?php
//mysqi 查询

$db_host='localhost';
$db_user='root';
$db_pws='123456';
$db_name='test';
$mysqli=new mysqli($db_host,$db_user,$db_pws,$db_name);
$query="select * from users";
$result=$mysqli->query($query);
if($result){
	if($result->num_rows>0){	//判断结果集中行的数目是否大于0
		while($row =$result->fetch_array()){	//循环输出结果集中的记录
			echo ($row[0])."<br>";
		echo ($row[1])."<br>";
		echo ($row[2])."<br>";
		echo ($row[3])."<br>";
		echo "<hr>";
		}
	}
}else{
	echo "查询失败";
}
$result->free();	//释放结果集中的内存
$mysqli->close();	//关闭数据库的连接

?>