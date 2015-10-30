<?php 
// 设置主机名称和端口号
$host = "127.0.0.1"; 
$port = 1234567; 
// 设置超时时间 
set_time_limit(0); 
// 创建Socket实例
$commonProtocol = getprotobyname("tcp"); 
$socket = socket_create(AF_INET, SOCK_STREAM, $commonProtocol)or die("Could not create 
socket\n"); 
//绑定Socket到端口 
socket_bind($socket, $host, $port)  or die("Could not bind to socket\n"); 
// 开始监听链接
socket_listen($socket) or die("Could not set up socket listener\n"); 
//编写服务端发送客户端的消息
$info = "欢迎光临三扬科技！\n\r"; 
while(true) 
{ 
    $conn = socket_accept($socket);
    printf("Socket 连接成功！\r\n");
    if($info != "")
    {
        printf("向客户端发送消息.....\r\n"); 
        echo @socket_write($conn, $info, strlen($info))."\n\r"; 
        printf("Socket发送的信息是：".$info."\r\n");
    }
    else 
    { 
        printf("没有可以发送的消息！\r\n");
    }    
    socket_close($conn); 
    printf("关闭 socket服务！\r\n\r\n"); 
} 
socket_close($socket);
?> 

