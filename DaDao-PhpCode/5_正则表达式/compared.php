<html>
<head>
<title>������ʽ���������</title>
</head>
<body>
<?php
echo "preg_replace used time:"; 			//preg_replace()����
$start = time(); 					//��ȡ��ʼʱ��
for($i=1;$i<=100000;$i++) {
$str ="ssssssssssssssssssssssssssssssssssssssssssssssssssss";  
preg_replace("/s/","",$str); 
}
$ended = time()-$start; 				//����ִ��preg_replace()��������ʱ��
echo $ended."<br>";
echo " ereg_replace used time:"; 			//ereg_replace ()����
$start = time();					//��ȡ��ʼʱ��
for($i=1;$i<=100000;$i++) { 
$str ="ssssssssssssssssssssssssssssssssssssssssssssssssssss"; 
ereg_replace("s","",$str); 
} 
$ended = time()-$start; 				//����ִ��ereg_replace ()��������ʱ��
echo $ended."<br>"; 
echo " str_replace used time:"; 			//str_replace ()����
$start = time();					//��ȡ��ʼʱ��
for($i=1;$i<=100000;$i++) { 
$str ="ssssssssssssssssssssssssssssssssssssssssssssssssssss"; 
str_replace("s","",$str); 
}
$ended = time()-$start;			 //����ִ��str_replace ()��������ʱ��
echo $ended; 
?> 
</body>
</html>
