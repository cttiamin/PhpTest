<?php
function myLogFile($filename,$msg){
//打开自定义日志文件，如果不存在就创建新自定义日志文件
	$file=fopen($filename,"a"); 
//增加错误产生的日期信息
	$str="<".date("Y/m/d h:i:s",mktime()).">".$msg; 
//写入自定义日志文件中
	fwrite($file,$str."<br>"); 
//关闭自定义日志
	fclose($file); 
}
$number="new Error";
//如果出现非数字性错误，则写入自定义日志
if(!is_numeric($number)){ 
	myLogFile("myLog.log","出现非数字错误");
}
$conn=@mysql_connect("localhost","root","1234");
//如果出现MySQL数据库链接错误，则写入自定义日志
if(!$conn){
	myLogFile("myLog.log","出现MySQL数据库链接错误");
}
?>
