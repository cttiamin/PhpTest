<?php
/*
������������
prepare() Ԥ׼�����
bind_result() �󶨽��
 */

$mysqli = new mysqli("localhost","root","123456","sanyang");
$query="select * from employee";
$result=$mysqli->prepare($query);	//����Ԥ׼������ѯ
$result->execute();	//ִ��Ԥ׼�����
$result->bind_result($id,$number,$name,$age);	//�󶨽��
while ($result->fetch()){
	echo $id."<br>";
	echo $number."<br>";
	echo $name."<br>";
	echo $age."<br><br>";
}
$result->close();
$mysqli->close();

?>
