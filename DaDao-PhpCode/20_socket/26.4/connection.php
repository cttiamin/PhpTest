<?php
//连接数据库
$host="127.0.0.1";
$port=21;
$timeout=30;
//连接FTP服务器
$connection = ftp_connect($host,$port,$timeout);
//获得结果			
if($connection)
{
	echo "服务器连接成功！<br>";
}else {
	echo "服务器连接失败！";
}
//登录数据库
$username="admin";
$pwd="admin";
$result = ftp_login($connection,$username,$pwd);
if($result)
{
	echo "用户".$username."登录成功！";
}else {
	echo "登录失败！";
}
function getConnection($host,$port){
	//连接FTP服务器
	$timeout=30;
	//连接FTP服务器
	$connection = ftp_connect($host,$port,$timeout);
	//获得结果			
	if($connection)
	{
		echo "服务器连接成功！<br>";
	}else {
		echo "服务器连接失败！";
	}	
	return $connection;
	}	
?>
