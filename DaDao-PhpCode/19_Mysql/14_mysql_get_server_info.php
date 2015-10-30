<?php
//mysql_get_server_info 返回mysql版本号
//mysql_get_host_info() 返回连接类型
//返回客户端库的版本号


$connection=mysql_connect("localhost","root","123456");
echo "数据库版本号为：".mysql_get_server_info();
echo "<br>";
echo "数据库连接类型:".mysql_get_host_info();
echo "<br>";
echo "客户端库的版本号:".mysql_get_client_info();



?>
