<?php
include("connection.php");
$conn=getConnection("127.0.0.1","21");
	//��¼������
	$result = ftp_login($conn,"admin","admin");
	if($result)
	{		
		echo "�û�".$username."��¼�ɹ���";		
		if (ftp_delete($conn,"aa.doc")) {
			echo "�ļ�ɾ���ɹ���";
		}else {
			echo "�ļ�ɾ��ʧ�ܣ�";
		}				
	}else {
		echo "��¼ʧ�ܣ�";
	}
		//�رշ���������
ftp_quit($connection);
?>