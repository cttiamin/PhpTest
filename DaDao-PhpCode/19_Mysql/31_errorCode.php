<?php
//errorCode(); ��ô������

$dsn = 'mysql:dbname=sanyang;host=localhost';
$user_name = 'root';
$user_psw = '123456';
$pdo = new PDO($dsn, $user_name, $user_psw);
$pdo->exec("update mytable set age=28 where id=1 ");//��mytable������
echo "errorCodeΪ�� ".$pdo->errorCode();

?>



