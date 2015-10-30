<?php
$boundarys="123456789'\r\n";					//定义分隔符
$header = "Content-type multipart/mixed; boundary=$boundarys";												
$uploadFile=$_FILES['uploadFile']['tmp_name'];	//获得上传文件
$mimeType = $_FILES['uploadFile']['type'];		//获得文件类型
$filename = $_FILES['uploadFile']['name'];		//获得文件名称				
$fp = fopen($uploadFile,'r');					//打开文件
$readFile= fread($fp,filesize($uploadFile));	//读取上传文件
$readFile = base64_decode($readFile);			//转换base64编码
$readFile = chunk_split($readFile);				//分解文件内容
$sender = $_POST["sender"];						//获得发件人
$to = $_POST["to"];								//获得收件人
$subject = $_POST["subject"];					//邮件主题
$content = $_POST["content"];					//邮件内容
$body="--$boundarys								//邮件内容
Content-type:$mimeType; name=$filename;
Content-sisposition: attachment; filename=$filename;
Content-transfer-encoding:base64
$readFile --$boundarys";
if (mail($to,$subject,$body,$header)){			//发送邮件
	echo "邮件发送成功！";
}else{
	echo "邮件发送失败！";
}
?>