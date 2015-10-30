<?php
include("connection.php");
$conn=getConnection("127.0.0.1","21");
	//登录服务器
	$result = ftp_login($conn,"admin","admin");
	if($result)
	{
		echo "用户".$username."登录成功！";
		$file = 'd://ftpServer/aa.txt';
		$fp = fopen($file, 'r+');
		if (ftp_fget($conn,$fp,"aa.txt",FTP_ASCII)) {
			echo "文件下载成功！";
		}else {
			echo "文件下载失败！";
		}
	fclose($fp);				
	}else {
		echo "登录失败！";
	}
	//关闭服务器连接
	ftp_quit($connection);
?>