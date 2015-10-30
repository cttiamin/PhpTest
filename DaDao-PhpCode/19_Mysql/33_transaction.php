<?php
//事物的处理

try {
$dsn = 'mysql:dbname=sanyang;host=localhost';
$user_name = 'root';
$user_psw = '123456';
$pdo = new PDO($dsn, $user_name, $user_psw);
$pdo->beginTransaction();	//开始事物
$pdo->exec("update employee set emp_age=28 where emp_id=3 ");
$pdo->exec("delete from employee where emp_id=2 ");
$pdo->commit(); //提交事物
}catch (Exception $e){	//如果发生错误
	$pdo->rollBack();	//使用rollBack()进行回滚
	echo $e->getMessage();
}
?>
