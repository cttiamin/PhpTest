<?php 
//���������ƺͶ˿�
$hostAddress ="127.0.0.1";
$hostPort =1234567;
//����Socketʵ��
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP); 
//���ӷ�����
$conn = socket_connect($socket,$hostAddress, $hostPort); 

if ($conn) {
	echo "���������ӳɹ��������Ƿ�����Ӧ����Ϣ������";
	while($info = socket_read($socket, 1024, PHP_BINARY_READ)) 
{ 
    echo('<p>������˵ ��' .$info. '</p>');
}
}else{
	echo "����������ʧ�ܣ�";
}
socket_close($socket);
?> 

