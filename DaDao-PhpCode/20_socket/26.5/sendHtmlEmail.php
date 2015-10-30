<?php

$to = "cn_cf214@163.com"; 		//收件人
$subject = "Hello Sunyang!";	//主题
$message = "					//邮件内容
<html>
<head>
<title>Sunyang</title>
</head>
<body>
My Friend! <br>
Welcome to sunyang !
</body>
</html>
";
$header  = "MIME-Version: 1.0\r\n";//邮件头
$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
$header .= "To: cn_cf214@163.com\r\n"; //收件人、发件人信息
$header .= "From:cn-cf214@163.com\r\n";
$header .= "Cc: cn-cf214@163.com\r\n";
$header .= "Bcc: cn-cf214@163.com\r\n";
if(mail($to, $subject, $message, $header)){//发送邮件
	echo "邮件发送成功！";
}else {
	echo "邮件发送失败！";
}
?> 

