<?php
try {
$dsn = 'mysql:dbname=sunyang;host=localhost';
$user_name = 'root';
$user_psw = 'root';
$pdo = new PDO($dsn, $user_name, $user_psw);
$pdo->beginTransaction();
$pdo->exec("update employee set emp_age=28 where emp_id=3 ");
$pdo->exec("delete from employee where emp_id=2 ");	
$pdo->commit();
}catch (Exception $e){
	$pdo->rollBack();
	echo $e->getMessage(); 
}
?>
