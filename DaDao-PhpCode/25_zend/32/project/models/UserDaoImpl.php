<?php
include_once("UserInfo.php");
include_once("../utils/ConnDB.php");
class UserDaoImpl {
	//�����û�
	function saveUser($user){
	
		$username=$user->getUserName();
		$password=$user->getPassword();
		$userno=$user->getUserNo();
		
		$query="INSERT INTO userinfo(`username` ,`password` ,`userno` )VALUES ( '$username', '$password', '$userno');";
	
		$result=mysql_query($query) or die("����ʧ��");
		return true;
	}
	//���������û�
	function findAllUser(){
		$array=array();
		$query="select * from userinfo";
		$result=mysql_query($query) or die("��ѯ�û�ʧ��");
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
	//ɾ���û�
	function removeUser($user){
		$id=$user->getId();
		$query="delete from userinfo  where id=$id";
		//echo $query;
		$result=mysql_query($query) or die("ɾ���û�ʧ��");
		return true;
	}
	//���ҵ����û�
	function findOneUser($id){
	
		$query="select * from userinfo where id=$id";
		$result=mysql_query($query) or die("��ѯ������Ʒ��Ϣʧ��");
		
			$userinfo=new UserInfo();
		while($row =mysql_fetch_row($result) ){	
			
			$userinfo->setId($row[0]);
			$userinfo->setUserName($row[1]);
			$userinfo->setPassword($row[2]);
			$userinfo->setUserNo($row[3]);			
			}
			
		return $userinfo;
	}
	//�����û�
	function updateUser($user){
		$id=$user->getId();
		$username=$user->getUserName();
		$password=$user->getPassword();
		$userno=$user->getUserNo();
		$query="update userInfo set username='$username', password='$password', userno='$userno' where id=$id";
		$result=mysql_query($query) or die("�����û�ʧ��");
		return true;
	}
	//��֤��¼
	function login($admin){
		$username=$admin->getUserName();
		$password=$admin->getPassword();
		
		$query="select * from userinfo where username='$username' and password='$password'";

		$result=mysql_query($query) or die("��ѯ��½��Ϣʧ��");
		while($row =mysql_fetch_row($result) ){
			return true;
		}
		return false;
	}
}
?>