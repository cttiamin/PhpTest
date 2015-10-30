<html>
<head>
<title>正则表达式的深入分析</title>
</head>
<body>
<?php
echo "preg_replace used time:"; 			//preg_replace()函数
$start = time(); 					//获取开始时间
for($i=1;$i<=100000;$i++) {
$str ="ssssssssssssssssssssssssssssssssssssssssssssssssssss";  
preg_replace("/s/","",$str); 
}
$ended = time()-$start; 				//计算执行preg_replace()函数的总时间
echo $ended."<br>";
echo " ereg_replace used time:"; 			//ereg_replace ()函数
$start = time();					//获取开始时间
for($i=1;$i<=100000;$i++) { 
$str ="ssssssssssssssssssssssssssssssssssssssssssssssssssss"; 
ereg_replace("s","",$str); 
} 
$ended = time()-$start; 				//计算执行ereg_replace ()函数的总时间
echo $ended."<br>"; 
echo " str_replace used time:"; 			//str_replace ()函数
$start = time();					//获取开始时间
for($i=1;$i<=100000;$i++) { 
$str ="ssssssssssssssssssssssssssssssssssssssssssssssssssss"; 
str_replace("s","",$str); 
}
$ended = time()-$start;			 //计算执行str_replace ()函数的总时间
echo $ended; 
?> 
</body>
</html>
