<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$db_name="sunyang";//���ݿ���
$mysqli=new mysqli($db_host,$db_user,$db_psw,$db_name)  ;
$query="select * from employee where emp_id < ?";
$result=$mysqli->prepare($query);
$result->bind_param("i",$emp_id);//�󶨲���
$emp_id=4;
$result->execute();
$result->bind_result($id,$number,$name,$age);//�󶨲ν��
while ($result->fetch()) {
	echo $id."<br>";
	echo $number."<br>";
	echo $name."<br>";
	echo $age."<br>";
	echo "<hr>";
}
$result->close();
$mysqli->close();
?>
