<?php
//fetch(PDO::FETCH_ASSOC)

$dsn = 'mysql:dbname=sanyang;host=localhost';
$user_name = 'root';
$user_psw = '123456';
$pdo = new PDO($dsn, $user_name, $user_psw);
$query="select * from employee";
$result = $pdo->prepare($query);	//准备执行查询
$result->execute();
$rwo=$result->fetch(PDO::FETCH_ASSOC); //获取结果集(只有第一条)
print_r($rwo);

?>
