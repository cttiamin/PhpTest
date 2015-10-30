<?php
session_start();
include('userModel.class.php');
if(isset($_REQUEST['flag'])){
	$flag=$_REQUEST['flag'];
}
switch($flag){
	case "register";
	register();
	break;
	case "login";
	login();
	break;
	case "edit";
	selectOneUser();
	break;
	case "update";
	update();
	break;
	case "delete";
	delete();
	break;
}
//用户注册

function register(){
	//print_r($_POST);
	$registerArray=array(
	'user_name'=>$_POST['user_name'],
	'user_password'=>$_POST['user_password'],
	'user_sex'=>$_POST['user_sex'],
	'user_email'=>$_POST['user_email'],
	'user_phone'=>$_POST['user_phone'],
	'user_address'=>$_POST['user_address']
	);
	$userModel=new UserModel();
	if ($userModel->checkRegister($registerArray['user_name'])){	//判断注册的用户是否存在
		$userModel->register($registerArray);
		header("Location:login.php");
	}else{
		echo "用户名已经存在";
	}
}

//用户登录

function login(){
	$user_name=$_POST['user_name'];
	$user_password=$_POST['user_password'];
	$userModel=new userModel();
	$login=$userModel->checklogin($user_name,$user_password);
	if(isset($login)){ //判断用户名密码是否正确
		$user=$userModel->selectAllUser(); //所有用户信息
		include('success.php');
		exit();
	}else{
		header("Location:error.php");
	}
}

function selectOneUser(){
	$id=$_GET['id'];
	$userModel=new UserModel();
	$userList=$userModel->selectOneUser($id);
	include('update.php');
	exit();
}

//修改用户信息
function update(){
	$updateArray=array(
	'user_password'=>$_POST['user_password'],
	'user_sex'=>$_POST['user_sex'],
	'user_email'=>$_POST['user_email'],
	'user_phone'=>$_POST['user_phone'],
	'user_address'=>$_POST['user_address'],
	'user_id'=>$_POST['id']
	);
	$userModel=new UserModel();
	$userModel->update($updateArray);	//修改用户信息
	$user=$userModel->selectAllUser();	//所有用户信息
	include('success.php');
	exit();
}

//删除用户信息
function delete(){
	$user_id=$_GET['id'];
	$userModel=new UserModel();
	$userModel->delete($user_id);
	$user=$userModel->selectAllUser();	//所有用户信息
	include('success.php');
	exit();
}

?>
