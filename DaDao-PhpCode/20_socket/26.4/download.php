<?php
include("connection.php");
$conn=getConnection("127.0.0.1","21");
	//��¼������
	$result = ftp_login($conn,"admin","admin");
	if($result)
	{
		echo "�û�".$username."��¼�ɹ���";
		$file = 'd://ftpServer/aa.txt';
		$fp = fopen($file, 'r+');
		if (ftp_fget($conn,$fp,"aa.txt",FTP_ASCII)) {
			echo "�ļ����سɹ���";
		}else {
			echo "�ļ�����ʧ�ܣ�";
		}
	fclose($fp);				
	}else {
		echo "��¼ʧ�ܣ�";
	}
	//�رշ���������
	ftp_quit($connection);
?>