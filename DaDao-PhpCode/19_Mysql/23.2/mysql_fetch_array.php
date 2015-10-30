<?php
$db_host="localhost";//服务器
$db_user="root";//用户名
$db_psw="root";//密码
$db_name="sunyang";//数据库名
$connection=mysql_connect($db_host,$db_user,$db_psw) or die("连接服务器失败");
mysql_select_db($db_name,$connection) or die("选择数据库失败");
$query="select * from employee";
$result=mysql_query($query) or die("查询失败");//执行查询
//判断结果集中行的数目是否大于零
if (mysql_num_rows($result)>0) {
//通过while循环将数组中的值输出
while($row =mysql_fetch_array($result) ){
echo ($row['emp_id']);
echo ($row["emp_number"]);
echo ($row["emp_name"]);
echo ($row["emp_age"]);
}
} else {
echo "未查询到任何记录";	
}
mysql_free_result($result);// 释放结果集内存
mysql_close($connection);
?>
