<?php
function myLogFile($filename,$msg){
//���Զ�����־�ļ�����������ھʹ������Զ�����־�ļ�
	$file=fopen($filename,"a"); 
//���Ӵ��������������Ϣ
	$str="<".date("Y/m/d h:i:s",mktime()).">".$msg; 
//д���Զ�����־�ļ���
	fwrite($file,$str."<br>"); 
//�ر��Զ�����־
	fclose($file); 
}
$number="new Error";
//������ַ������Դ�����д���Զ�����־
if(!is_numeric($number)){ 
	myLogFile("myLog.log","���ַ����ִ���");
}
$conn=@mysql_connect("localhost","root","1234");
//�������MySQL���ݿ����Ӵ�����д���Զ�����־
if(!$conn){
	myLogFile("myLog.log","����MySQL���ݿ����Ӵ���");
}
?>
