<?php
//同时绑定参定 参数，结果
//bind_param  绑定参数

$mysqli=new mysqli('localhost','root','123456','sanyang');
$query="select * from employee where emp_id < ?";
$result=$mysqli->prepare($query);	//准备执行预准备语句
$result->bind_param("i",$emp_id);	//绑定参数
$emp_id=4;
$result->execute(); //执行
$result->bind_result($id,$number,$name,$age); //绑定参结果
while($result->fetch()){
	echo $id."<br>";
	echo $number."<br>";
	echo $name."<br>";
	echo $age."<br>";
	echo "<hr>";
}
$result->close();
$mysqli->close();

?>
