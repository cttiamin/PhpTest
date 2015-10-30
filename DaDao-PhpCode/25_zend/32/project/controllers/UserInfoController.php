<?php
//�����ļ�
include_once("../models/UserInfo.php");
include_once("../models/UserDaoImpl.php");
//�����Ự
session_start();
//��ò�������
$action="";
if($_POST['action']){
	$action=$_POST['action'];
}else {
	$action=$_GET['action'];
}

switch ($action){
	case "saveUser":
		saveUser();
		break;
	case "findAllUser":
		findAllUser();
		break;
	case "removeUser":
		removeUser();
		break;
	case "findOneUser":
		findOneUser();
		break;
	case "updateUser":
		updateUser();
		break;
}
//���������û�
function findAllUser(){
	$ud=new UserDaoImpl();
	$array=array();
	$array=$ud->findAllUser();
	$_SESSION['allUser']=$array;
	$page="../views/showUser.php";
	//include($page);

	header("Location:$page");
}
//�����û�
function saveUser(){
	$userno=$_POST['userno'];	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$user=new UserInfo();
	$user->setUserNo($userno);
	$user->setUserName($username);;
	$user->setPassword($password);
	
	$ud=new UserDaoImpl();

	if($ud->saveUser($user)){
		$page="../views/success.php";
		header("Location:$page");
	}else {
		$page="../views/error.php";
		header("Location:$page");
	}

}
//ɾ���û�
function removeUser(){
	$id=$_GET['id'];
	$user=new UserInfo();
	$user->setid($id);
	$pd=new UserDaoImpl();

	if($pd->removeUser($user)){
		findAllUser();
	}else {
		$page="../views/error.php";
		header("Location:$page");
	}
}
//���ҵ����û�
function findOneUser(){
	$id=$_GET['id'];
	$ud=new UserDaoImpl();
	$userinfo=$ud->findOneUser($id);
	
	$_SESSION['oneUser']=$userinfo;
	$page="../views/updateUser.php";
	header("Location:$page");
}
//�����û�
function updateUser(){
	$id=$_POST['id'];
	$userno=$_POST['userno'];	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$user=new UserInfo();
	$user->setid($id);
	$user->setUserNo($userno);
	$user->setUserName($username);;
	$user->setPassword($password);
	
	$ud=new UserDaoImpl();

	if($ud->updateUser($user)){
		findAllUser();
	}else {
		$page="../views/error.php";
		header("Location:$page");
	}

}
?>