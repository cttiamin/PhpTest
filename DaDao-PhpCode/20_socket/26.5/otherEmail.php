<?php
$boundarys="123456789'\r\n";					//����ָ���
$header = "Content-type multipart/mixed; boundary=$boundarys";												
$uploadFile=$_FILES['uploadFile']['tmp_name'];	//����ϴ��ļ�
$mimeType = $_FILES['uploadFile']['type'];		//����ļ�����
$filename = $_FILES['uploadFile']['name'];		//����ļ�����				
$fp = fopen($uploadFile,'r');					//���ļ�
$readFile= fread($fp,filesize($uploadFile));	//��ȡ�ϴ��ļ�
$readFile = base64_decode($readFile);			//ת��base64����
$readFile = chunk_split($readFile);				//�ֽ��ļ�����
$sender = $_POST["sender"];						//��÷�����
$to = $_POST["to"];								//����ռ���
$subject = $_POST["subject"];					//�ʼ�����
$content = $_POST["content"];					//�ʼ�����
$body="--$boundarys								//�ʼ�����
Content-type:$mimeType; name=$filename;
Content-sisposition: attachment; filename=$filename;
Content-transfer-encoding:base64
$readFile --$boundarys";
if (mail($to,$subject,$body,$header)){			//�����ʼ�
	echo "�ʼ����ͳɹ���";
}else{
	echo "�ʼ�����ʧ�ܣ�";
}
?>