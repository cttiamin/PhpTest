<?php
//PDO�������ݿ�

$dsn='mysql:dbname=sanyang;host=localhost';
$user_name='root';
$user_psw='123456';
try{
	$pdo=new PDO($dsn,$user_name,$user_psw);	//ʵ����PDO�Ĺ��캯��
	echo '���ݿ����ӳɹ�';
}catch (PDOException $e){
	echo '�������ݿ�ʧ�ܣ�'.$e->getMessage();	//������ݿ�����ʧ�ܵ���Ϣ
}
?>
