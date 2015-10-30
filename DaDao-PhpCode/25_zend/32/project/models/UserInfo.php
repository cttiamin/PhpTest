<?php
class UserInfo{
	public $id='';
	public $userNo;
	public $userName='';
	public $password='';
	function getId()
	{
	return $this->id;	
	}
	function setid($id)
	{
	$this->id=$id;	
	
	
	}
	function getUserName()
	{
	return $this->userName;	
	}
	function setUserName($userName)
	{
	$this->userName=$userName;		
	
	}
	function getPassword()
	{
	return $this->password;	
	}
	function setPassword($password)
	{
	$this->password=$password;		
	
	}
	function getUserNo(){
		return $this->userNo;
	}
	function  setUserNo($userNo){
		$this->userNo=$userNo;
	}
}

?>