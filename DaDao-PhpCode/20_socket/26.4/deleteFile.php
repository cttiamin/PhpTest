<?php
include("connection.php");
$conn=getConnection("127.0.0.1","21");
	//登录服务器
	$result = ftp_login($conn,"admin","admin");
	if($result)
	{		
		echo "用户".$username."登录成功！";		
		if (ftp_delete($conn,"aa.doc")) {
			echo "文件删除成功！";
		}else {
			echo "文件删除失败！";
		}				
	}else {
		echo "登录失败！";
	}
		//关闭服务器连接
ftp_quit($connection);
?>