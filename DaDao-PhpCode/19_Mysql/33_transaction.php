<?php
//����Ĵ���

try {
$dsn = 'mysql:dbname=sanyang;host=localhost';
$user_name = 'root';
$user_psw = '123456';
$pdo = new PDO($dsn, $user_name, $user_psw);
$pdo->beginTransaction();	//��ʼ����
$pdo->exec("update employee set emp_age=28 where emp_id=3 ");
$pdo->exec("delete from employee where emp_id=2 ");
$pdo->commit(); //�ύ����
}catch (Exception $e){	//�����������
	$pdo->rollBack();	//ʹ��rollBack()���лع�
	echo $e->getMessage();
}
?>
