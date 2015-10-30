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
//登录FTP服务器
$username="admin";
$pwd="admin";
$result = ftp_login($connection,$username,$pwd);
if($result)
{
	echo "用户".$username."登录成功！";
}else {
	echo "登录失败！";
}
$filelist = ftp_nlist($connection, ""); 	//列出服务器上全部文件
if ($filelist!=null) {
echo "<br>";					
for ($i=0;$i<count($filelist);$i++){
	print_r("服务器文件：".$filelist[$i]);		
	print_r("  大小为：".ftp_size($connection,$filelist[$i])."<br>");
}
}else {
	echo "读取文件失败";
}
ftp_quit($connection);
?>
