<?php

$to = "cn_cf214@163.com"; 		//�ռ���
$subject = "Hello Sunyang!";	//����
$message = "					//�ʼ�����
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
$header  = "MIME-Version: 1.0\r\n";//�ʼ�ͷ
$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
$header .= "To: cn_cf214@163.com\r\n"; //�ռ��ˡ���������Ϣ
$header .= "From:cn-cf214@163.com\r\n";
$header .= "Cc: cn-cf214@163.com\r\n";
$header .= "Bcc: cn-cf214@163.com\r\n";
if(mail($to, $subject, $message, $header)){//�����ʼ�
	echo "�ʼ����ͳɹ���";
}else {
	echo "�ʼ�����ʧ�ܣ�";
}
?> 

