<?php 
// �����������ƺͶ˿ں�
$host = "127.0.0.1"; 
$port = 1234567; 
// ���ó�ʱʱ�� 
set_time_limit(0); 
// ����Socketʵ��
$commonProtocol = getprotobyname("tcp"); 
$socket = socket_create(AF_INET, SOCK_STREAM, $commonProtocol)or die("Could not create 
socket\n"); 
//��Socket���˿� 
socket_bind($socket, $host, $port)  or die("Could not bind to socket\n"); 
// ��ʼ��������
socket_listen($socket) or die("Could not set up socket listener\n"); 
//��д����˷��Ϳͻ��˵���Ϣ
$info = "��ӭ��������Ƽ���\n\r"; 
while(true) 
{ 
    $conn = socket_accept($socket);
    printf("Socket ���ӳɹ���\r\n");
    if($info != "")
    {
        printf("��ͻ��˷�����Ϣ.....\r\n"); 
        echo @socket_write($conn, $info, strlen($info))."\n\r"; 
        printf("Socket���͵���Ϣ�ǣ�".$info."\r\n");
    }
    else 
    { 
        printf("û�п��Է��͵���Ϣ��\r\n");
    }    
    socket_close($conn); 
    printf("�ر� socket����\r\n\r\n"); 
} 
socket_close($socket);
?> 

