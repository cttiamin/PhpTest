<?php
//PDO连接数据库

$dsn='mysql:dbname=sanyang;host=localhost';
$user_name='root';
$user_psw='123456';
try{
	$pdo=new PDO($dsn,$user_name,$user_psw);	//实例化PDO的构造函数
	echo '数据库连接成功';
}catch (PDOException $e){
	echo '连接数据库失败：'.$e->getMessage();	//输出数据库连接失败的信息
}
?>
