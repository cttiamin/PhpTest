<?php
//�������ݿ�
$host="127.0.0.1";
$port=21;
$timeout=30;
//����FTP������
$connection = ftp_connect($host,$port,$timeout);
//��ý��			
if($connection)
{
	echo "���������ӳɹ���<br>";
}else {
	echo "����������ʧ�ܣ�";
}
//��¼���ݿ�
$username="admin";
$pwd="admin";
$result = ftp_login($connection,$username,$pwd);
if($result)
{
	echo "�û�".$username."��¼�ɹ���";
}else {
	echo "��¼ʧ�ܣ�";
}
function getConnection($host,$port){
	//����FTP������
	$timeout=30;
	//����FTP������
	$connection = ftp_connect($host,$port,$timeout);
	//��ý��			
	if($connection)
	{
		echo "���������ӳɹ���<br>";
	}else {
		echo "����������ʧ�ܣ�";
	}	
	return $connection;
	}	
?>
