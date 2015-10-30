<?php 
//服务器名称和端口
$hostAddress ="127.0.0.1";
$hostPort =1234567;
//创建Socket实例
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP); 
//连接服务器
$conn = socket_connect($socket,$hostAddress, $hostPort); 

if ($conn) {
	echo "服务器连接成功，以下是服务器应答信息。。。";
	while($info = socket_read($socket, 1024, PHP_BINARY_READ)) 
{ 
    echo('<p>服务器说 ：' .$info. '</p>');
}
}else{
	echo "服务器连接失败，";
}
socket_close($socket);
?> 

