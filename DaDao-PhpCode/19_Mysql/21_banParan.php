<?php
//bind_param  �󶨲���

$mysqli=new mysqli('localhost','root','123456','sanyang');
$query="insert into employee (emp_number,mp_name,emp_age)values(?,?,?)";
$result=$mysqli->prepare($query);	//׼��ִ��Ԥ׼�����
$result->bind_param("ssi",$number,$name,$age); //�󶨲���	s����srting��
$number='sy0807';
$name='employee7';
$age=20;
$result->execute(); //ִ��
$result->close();
$mysqli->close();

?>
