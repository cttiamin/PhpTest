<?php
session_start();

$p_code  = strtoupper($_POST['code']);

if($p_code == $_SESSION['code']){
	echo "验证码输入成功";
}else{
	echo "<script>alert('验证码错误');history.go(-1);</script>";
	exit();
}

echo "<div style='border:solid 2px #dcdcdc;background:yellow;position:absolute;left:80px;left:200px;'>登录成功</div>";
