<?php
include("connection.php");
$conn=getConnection("127.0.0.1","21");
	//登录服务器
	$result = ftp_login($conn,"admin","admin");
	if($result)
	{
		echo "用户".$username."登录成功！";		
		if (ftp_put($conn,"newFile.txt","d://text.txt",FTP_BINARY )) {
			echo "文件上传成功！";
		}else {
			echo "文件上传失败！";
		}				
	}else {
		echo "登录失败！";
	}
	//关闭服务器连接
	ftp_quit($connection);
?>