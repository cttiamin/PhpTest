<?php
//mysqli面象对象连接数据库

$db_host='localhost';//服务器
$db_user='root';	//用户名
$db_psw='123456';//密码
$db_name='test';	//数据库
$mysqli=new mysqli();
$mysqliconnection = $mysqli->connect($db_host,$db_user,$db_psw,$db_name);
if($mysqliconnection){
	echo "aa";
}else{
	echo "bb";
}
?>