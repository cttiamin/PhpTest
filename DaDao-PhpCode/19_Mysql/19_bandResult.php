<?php
/*
缓存结果的例子
prepare() 预准备语句
bind_result() 绑定结果
 */

$mysqli = new mysqli("localhost","root","123456","sanyang");
$query="select * from employee";
$result=$mysqli->prepare($query);	//进行预准备语句查询
$result->execute();	//执行预准备语句
$result->bind_result($id,$number,$name,$age);	//绑定结果
while ($result->fetch()){
	echo $id."<br>";
	echo $number."<br>";
	echo $name."<br>";
	echo $age."<br><br>";
}
$result->close();
$mysqli->close();

?>
