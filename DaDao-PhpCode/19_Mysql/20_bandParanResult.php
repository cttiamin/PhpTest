<?php
//ͬʱ�󶨲ζ� ���������
//bind_param  �󶨲���

$mysqli=new mysqli('localhost','root','123456','sanyang');
$query="select * from employee where emp_id < ?";
$result=$mysqli->prepare($query);	//׼��ִ��Ԥ׼�����
$result->bind_param("i",$emp_id);	//�󶨲���
$emp_id=4;
$result->execute(); //ִ��
$result->bind_result($id,$number,$name,$age); //�󶨲ν��
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
