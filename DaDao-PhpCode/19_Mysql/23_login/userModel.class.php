<?php
include('dbconn.class.php');
class UserModel {
	//查询注册的用户是否存在
function checkRegister($username){
	$mysqli=DBConn::getConn();
	$sql="select user_name from user where user_name=?";
	$result=$mysqli->prepare($sql);
	$result->bind_param("s",$user_name); //绑定参数
	$user_name=$username;
	$result->execute();
	$result->bind_result($user_name); //绑定结果断
	if($result->fetch()){
		$result->close();
		$mysqli->close();
		return FALSE;
	}else{
		$result->close();
		$mysqli->close();
		return TRUE;
	}

}

//存储用户注册信息
function register($registerArray){
	$mysqli=DBConn::getConn();
	$mysqli->query("set names gb2312"); //转换字符编格式
	$query="insert into user (user_name,user_psw,user_sex,user_email,user_phone,user_address)values(?,?,?,?,?,?)";
	$result=$mysqli->prepare($query);	//预准备结果语句
	$result->bind_param("ssssss",$user_name,$user_psw,$user_sex,$user_email,$user_phone,$user_address);
	$user_name=$registerArray['user_name'];
	$user_pws=$registerArray['user_password'];
	$user_sex=$registerArray['user_sex'];
	$user_email=$registerArray['user_email'];
	$user_phone=$registerArray['user_phone'];
	$user_address=$registerArray['user_address'];
	$result->execute();
	$mysqli->close();
}

//验证登录的用户名和密码
function checkLogin($username,$userpsw){
	$mysqli=DBConn::getConn();
	$mysqli->query("set names gb2312"); //转换字符编码格式
	$sql="select * from user where user_name=? and user_psw=?";
	$result=$mysqli->prepare($sql);
	$result->bind_param("ss",$user_name,$user_psw); 	//绑定参数
	$user_name=$username;
	$user_psw=$userpsw;
	$result->execute();
	$result->bind_result($user_id,$user_name,$user_psw,$user_sex,$user_emaill,$user_phone,$user_address); //绑定结果集
	while($result->fetch){
		$userList=array(
		'user_id'=>$user_id,
		'user_name'=>$user_name,
		'user_psw'=>$user_psw,
		'user_sex'=>$user_sex,
		'user_email'=>$user_emaill,
		'user_phone'=>$user_phone,
		'user_address'=>$user_address
		); 	//将结果集放入数组中
	}
$result->close();
$mysqli->close();
return $userList; //返回一个数组
}

//查询所有用户的信息
function selectAllUser(){
	$mysqli=DBConn::getConn();
	$mysqli->query("set names gb2312");	//转换字符编码格式
	$sql="select * from user";
	$result=$mysqli->prepare($sql);
	$result->execute();
	$result->bind_result($user_id,$user_name,$user_psw,$user_sex,$user_emaill,$user_phone,$user_address);
	$userArray=array();
	while($result->fetch()){
		$userList=array(
		'user_id'=>$user_id,
		'user_name'=>$user_name,
		'user_psw'=>$user_psw,
		'user_sex'=>$user_sex,
		'user_email'=>$user_emaill,
		'user_phone'=>$user_phone,
		'user_address'=>$user_address
		); //将结果集放入数组中
		$userArray[]=$userList;		//将保存不同用户信息数组分别放入另一个数组中
	}
$result->close();
$mysqli->close();
return $userArray; //返回一个数组
}

//查询单个用户信息
function selectOneUser($id){
	$mysqli=DBConn::getConn();
	$mysqli->query("set names gb2312");	//转换字符编码格式
	$sql="select * from user where user_id=?";
	$result->bind_param("i",$user_id); //绑定参数
	$user_id=$id;
	$result->execute();
	$result->bind_result($user_id,$user_name,$user_psw,$user_sex,$user_emaill,$user_phone,$user_address);	//绑定结果
		while($result->fetch()){
		$userList=array(
		'user_id'=>$user_id,
		'user_name'=>$user_name,
		'user_psw'=>$user_psw,
		'user_sex'=>$user_sex,
		'user_email'=>$user_emaill,
		'user_phone'=>$user_phone,
		'user_address'=>$user_address
		); //将结果集放入数组中
	}
$result->close();
$mysqli->close();
return $userList;	//返回一个数组
}

//修改用户信息
function update($updateArray){
	$mysqli=DBConn::getConn();
	$mysqli->query("set names gb2312");	//转换字符编码格式
	$query="update user set user_psw=?,user_sex=?,user_email=?,user_phone=?,user_address=? where user_id=?";
	$result=$mysqli->param($query);
	$result->bind_param("sssssi",$user_psw,$user_sex,$user_email,$user_phone,$user_address,$user_id);	//参数绑定
	$user_psw=$updateArray['user_password'];
	$user_sex=$updateArray['user_sex'];
	$user_email=$updateArray['user_email'];
	$user_phone=$updateArray['user_phone'];
	$user_address=$updateArray['user_address'];
	$user_id=$updateArray['user_id'];
	$result->execute();
	$result->close();
}


//删除用户信息
function delete($id){
	$mysqli=DBConn::getConn();
	$mysqli->query("set names gb2312");
	$query="delete from user where user_id=?";
	$result=$mysqli->prepare($query);
	$result->bind_param("i",$user_id);	//参数绑定
	$user_id=$id;
	$result->execute();
	$mysqli->close();
}

}

?>