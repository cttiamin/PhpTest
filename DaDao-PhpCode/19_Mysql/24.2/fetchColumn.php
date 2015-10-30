<?php
$dsn = 'mysql:dbname=sunyang;host=localhost';
$user_name = 'root';
$user_psw = 'root';
$pdo = new PDO($dsn, $user_name, $user_psw);
$query="select * from employee";
$result = $pdo->prepare($query);
$result->execute();
$rwo=$result->fetchColumn();
echo $rwo."<br>";
$rwo=$result->fetchColumn(2);
print_r($rwo);
?>
