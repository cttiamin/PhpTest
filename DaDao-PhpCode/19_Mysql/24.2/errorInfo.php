<?php
$dsn = 'mysql:dbname=sunyang;host=localhost';
$user_name = 'root';
$user_psw = 'root';
$pdo = new PDO($dsn, $user_name, $user_psw);
$pdo->exec("update mytable set age=28 where id=1 ");//表mytable不存在
echo "errorInfo为： ";
print_r($pdo->errorInfo());
?>
