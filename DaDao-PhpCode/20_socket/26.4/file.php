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
//��¼FTP������
$username="admin";
$pwd="admin";
$result = ftp_login($connection,$username,$pwd);
if($result)
{
	echo "�û�".$username."��¼�ɹ���";
}else {
	echo "��¼ʧ�ܣ�";
}
$filelist = ftp_nlist($connection, ""); 	//�г���������ȫ���ļ�
if ($filelist!=null) {
echo "<br>";					
for ($i=0;$i<count($filelist);$i++){
	print_r("�������ļ���".$filelist[$i]);		
	print_r("  ��СΪ��".ftp_size($connection,$filelist[$i])."<br>");
}
}else {
	echo "��ȡ�ļ�ʧ��";
}
ftp_quit($connection);
?>
