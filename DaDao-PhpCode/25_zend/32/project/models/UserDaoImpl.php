<?php
include_once("UserInfo.php");
include_once("../utils/ConnDB.php");
class UserDaoImpl {
	//保存用户
	function saveUser($user){
	
		$username=$user->getUserName();
		$password=$user->getPassword();
		$userno=$user->getUserNo();
		
		$query="INSERT INTO userinfo(`username` ,`password` ,`userno` )VALUES ( '$username', '$password', '$userno');";
	
		$result=mysql_query($query) or die("保存失败");
		return true;
	}
	//查找所有用户
	function findAllUser(){
		$array=array();
		$query="select * from userinfo";
		$result=mysql_query($query) or die("查询用户失败");
		while($row =mysql_fetch_row($result) ){
			$userinfo=new UserInfo();
			$userinfo->setId($row[0]);
			$userinfo->setUserName($row[1]);
			$userinfo->setPassword($row[2]);
			$userinfo->setUserNo($row[3]);			
			$array[]=$userinfo;
		}
		return $array;
	}
	//删除用户
	function removeUser($user){
		$id=$user->getId();
		$query="delete from userinfo  where id=$id";
		//echo $query;
		$result=mysql_query($query) or die("删除用户失败");
		return true;
	}
	//查找单个用户
	function findOneUser($id){
	
		$query="select * from userinfo where id=$id";
		$result=mysql_query($query) or die("查询单个产品信息失败");
		
			$userinfo=new UserInfo();
		while($row =mysql_fetch_row($result) ){	
			
			$userinfo->setId($row[0]);
			$userinfo->setUserName($row[1]);
			$userinfo->setPassword($row[2]);
			$userinfo->setUserNo($row[3]);			
			}
			
		return $userinfo;
	}
	//更新用户
	function updateUser($user){
		$id=$user->getId();
		$username=$user->getUserName();
		$password=$user->getPassword();
		$userno=$user->getUserNo();
		$query="update userInfo set username='$username', password='$password', userno='$userno' where id=$id";
		$result=mysql_query($query) or die("更新用户失败");
		return true;
	}
	//验证登录
	function login($admin){
		$username=$admin->getUserName();
		$password=$admin->getPassword();
		
		$query="select * from userinfo where username='$username' and password='$password'";

		$result=mysql_query($query) or die("查询登陆信息失败");
		while($row =mysql_fetch_row($result) ){
			return true;
		}
		return false;
	}
}
?>