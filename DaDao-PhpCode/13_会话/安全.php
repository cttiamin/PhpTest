<?php
session_start();
if(!isset($_SESSION['user_agent'])){ //����û�������
	$_SESSION['user_agent']=$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'];
}elseif($_SESSION['user_agent']!=$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']){
	session_regenerate_id();	//�������������������ID
}
?>
