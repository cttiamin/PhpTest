<?php
session_start();
if(!isset($_SESSION['user_agent'])){ //如果用户不存在
	$_SESSION['user_agent']=$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'];
}elseif($_SESSION['user_agent']!=$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']){
	session_regenerate_id();	//用这个函数来重新生成ID
}
?>
