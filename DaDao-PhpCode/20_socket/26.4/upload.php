<?php
include("connection.php");
$conn=getConnection("127.0.0.1","21");
	//��¼������
	$result = ftp_login($conn,"admin","admin");
	if($result)
	{
		echo "�û�".$username."��¼�ɹ���";		
		if (ftp_put($conn,"newFile.txt","d://text.txt",FTP_BINARY )) {
			echo "�ļ��ϴ��ɹ���";
		}else {
			echo "�ļ��ϴ�ʧ�ܣ�";
		}				
	}else {
		echo "��¼ʧ�ܣ�";
	}
	//�رշ���������
	ftp_quit($connection);
?>