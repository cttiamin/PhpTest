<?php
$dsn = 'mysql:dbname=sunyang;host=localhost';
$user_name = 'root';
$user_psw = 'root';
$pdo = new PDO($dsn, $user_name, $user_psw);
$query="delete from employee where emp_id>4";
$affCount=$pdo->exec($query);//ִ�в�ѯ
echo "��Ӱ�������Ϊ��".$affCount;
?>
