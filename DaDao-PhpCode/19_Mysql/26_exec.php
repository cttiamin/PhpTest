<?php
//ʹ��exec ִ��

$dsn = 'mysql:dbname=sanyang;host=localhost';
$user_name = 'root';
$user_psw = '123456';
$pdo = new PDO($dsn, $user_name, $user_psw);
//$pdo->exec("update mytable set age=28 where id=1 ");	//��mytable������
//echo "errorCodeΪ�� ".$pdo->errorCode();	//���������Ϣ
$query="delete from employee where emp_id>5";
$affCount=$pdo->exec($query);	//ִ�в�ѯ
echo "��Ӱ�������Ϊ��".$affCount;
?>
