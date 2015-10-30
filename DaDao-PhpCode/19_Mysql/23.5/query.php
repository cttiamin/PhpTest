<?php
$db_host="localhost";//服务器
$db_user="root";//用户名
$db_psw="root";//密码
$db_name="sunyang";//数据库名
$mysqli=new mysqli($db_host,$db_user,$db_psw,$db_name) ;//实例化mysqli
$query="select * from employee";
$result=$mysqli->query($query);
if ($result) {
	if($result->num_rows>0){ //判断结果集中行的数目是否大于0
	while($row =$result->fetch_array() ){//循环输出结果集中的记录
	echo ($row[0])."<br>";
    echo ($row[1])."<br>";
    echo ($row[2])."<br>";	
    echo ($row[3])."<br>";
    echo "<hr>";
	}	
}
}else {
	echo "查询失败";
}
$result->free();
$mysqli->close();
?>
