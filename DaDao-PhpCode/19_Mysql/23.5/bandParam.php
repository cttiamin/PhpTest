<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$db_name="sunyang";//���ݿ���
$mysqli=new mysqli($db_host,$db_user,$db_psw,$db_name)  ;
$query="insert into employee (emp_number,emp_name,emp_age) values (?,?,?)";
$result=$mysqli->prepare($query);
$result->bind_param("ssi",$number,$name,$age);//�󶨲���
$number='sy0807';
$name='employee7';
$age=20;
$result->execute();//ִ��Ԥ׼�����
$result->close();
$mysqli->close();
?>
