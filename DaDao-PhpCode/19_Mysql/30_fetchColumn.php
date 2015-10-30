<?php
$dsn = 'mysql:dbname=sanyang;host=localhost';
$user_name = 'root';
$user_psw = '123456';
$pdo = new PDO($dsn, $user_name, $user_psw);
$query="select * from employee";
$result = $pdo->prepare($query);
$result->execute();
$rwo=$result->fetchColumn();	//获取结果集的行,索引值为0的列
echo $rwo."<br>";
$rwo=$result->fetchColumn(2);	//获取索引值为2的列
print_r($rwo);
?>
