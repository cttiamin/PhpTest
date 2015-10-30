<?php
//bind_param  绑定参数

$mysqli=new mysqli('localhost','root','123456','sanyang');
$query="insert into employee (emp_number,mp_name,emp_age)values(?,?,?)";
$result=$mysqli->prepare($query);	//准备执行预准备语句
$result->bind_param("ssi",$number,$name,$age); //绑定参数	s代表srting型
$number='sy0807';
$name='employee7';
$age=20;
$result->execute(); //执行
$result->close();
$mysqli->close();

?>
