<?php
$dsn = 'mysql:dbname=sanyang;host=localhost';
$user_name = 'root';
$user_psw = '123456';
$pdo = new PDO($dsn, $user_name, $user_psw);
$query="select * from employee";
$result = $pdo->prepare($query);
$result->execute();
$rwo=$result->fetchColumn();	//��ȡ���������,����ֵΪ0����
echo $rwo."<br>";
$rwo=$result->fetchColumn(2);	//��ȡ����ֵΪ2����
print_r($rwo);
?>
