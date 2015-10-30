<?php
$db_host="localhost"; //服务器
$db_user="root";
$db_pws="123456";
$db_name="sunyang";
$connection=mysql_connect($db_host,$db_user,$db_pws)or die("连接服务器失败");
mysql_select_db($db_name,$connection);
$query="select * from employee2";
$result=mysql_query($query)or die("查询失败");
//判断结果集中行数是否大于0
if(mysql_num_rows($result)>0){
	//通过while循环将数组中的值输出
	while($row=mysql_fetch_array($result)){
		echo ($row['emp_id'])."<br>";
		echo ($row['emp_name'])."<br>";
		echo ($row['emp_number'])."<br>";
		echo ($row['emp_age'])."<br>";
	}
}else{
	echo "未查询到任何记录";
}
mysql_free_result($result);//释放结果集内的空间
mysql_close($connection);



?>