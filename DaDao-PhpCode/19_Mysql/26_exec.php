<?php
//使用exec 执行

$dsn = 'mysql:dbname=sanyang;host=localhost';
$user_name = 'root';
$user_psw = '123456';
$pdo = new PDO($dsn, $user_name, $user_psw);
//$pdo->exec("update mytable set age=28 where id=1 ");	//表mytable不存在
//echo "errorCode为： ".$pdo->errorCode();	//输出错误信息
$query="delete from employee where emp_id>5";
$affCount=$pdo->exec($query);	//执行查询
echo "受影响的行数为：".$affCount;
?>
