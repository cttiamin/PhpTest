<?php
//引入文件
include_once("../models/UserInfo.php");
include_once("../models/UserDaoImpl.php");
//验证登录
function login(){
	$name=$_POST['name'];
	$password=$_POST['password'];

	$admin=new UserInfo();
	$admin->setusername($name);
	$admin->setpassword($password);

	$ud=new UserDaoImpl();
	if($ud->login($admin)){
		$_SESSION['admin']=$admin;
		$page="../views/success.php";
		header("Location:$page");
	}else {
		$page="../views/error.php";
		header("Location:$page");
	}
}
login();
?>
