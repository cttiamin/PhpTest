<?php
include('dbconn.class.php');
class UserModel {
	//��ѯע����û��Ƿ����
function checkRegister($username){
	$mysqli=DBConn::getConn();
	$sql="select user_name from user where user_name=?";
	$result=$mysqli->prepare($sql);
	$result->bind_param("s",$user_name); //�󶨲���
	$user_name=$username;
	$result->execute();
	$result->bind_result($user_name); //�󶨽����
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

//�洢�û�ע����Ϣ
function register($registerArray){
	$mysqli=DBConn::getConn();
	$mysqli->query("set names gb2312"); //ת���ַ����ʽ
	$query="insert into user (user_name,user_psw,user_sex,user_email,user_phone,user_address)values(?,?,?,?,?,?)";
	$result=$mysqli->prepare($query);	//Ԥ׼��������
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

//��֤��¼���û���������
function checkLogin($username,$userpsw){
	$mysqli=DBConn::getConn();
	$mysqli->query("set names gb2312"); //ת���ַ������ʽ
	$sql="select * from user where user_name=? and user_psw=?";
	$result=$mysqli->prepare($sql);
	$result->bind_param("ss",$user_name,$user_psw); 	//�󶨲���
	$user_name=$username;
	$user_psw=$userpsw;
	$result->execute();
	$result->bind_result($user_id,$user_name,$user_psw,$user_sex,$user_emaill,$user_phone,$user_address); //�󶨽����
	while($result->fetch){
		$userList=array(
		'user_id'=>$user_id,
		'user_name'=>$user_name,
		'user_psw'=>$user_psw,
		'user_sex'=>$user_sex,
		'user_email'=>$user_emaill,
		'user_phone'=>$user_phone,
		'user_address'=>$user_address
		); 	//�����������������
	}
$result->close();
$mysqli->close();
return $userList; //����һ������
}

//��ѯ�����û�����Ϣ
function selectAllUser(){
	$mysqli=DBConn::getConn();
	$mysqli->query("set names gb2312");	//ת���ַ������ʽ
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
		); //�����������������
		$userArray[]=$userList;		//�����治ͬ�û���Ϣ����ֱ������һ��������
	}
$result->close();
$mysqli->close();
return $userArray; //����һ������
}

//��ѯ�����û���Ϣ
function selectOneUser($id){
	$mysqli=DBConn::getConn();
	$mysqli->query("set names gb2312");	//ת���ַ������ʽ
	$sql="select * from user where user_id=?";
	$result->bind_param("i",$user_id); //�󶨲���
	$user_id=$id;
	$result->execute();
	$result->bind_result($user_id,$user_name,$user_psw,$user_sex,$user_emaill,$user_phone,$user_address);	//�󶨽��
		while($result->fetch()){
		$userList=array(
		'user_id'=>$user_id,
		'user_name'=>$user_name,
		'user_psw'=>$user_psw,
		'user_sex'=>$user_sex,
		'user_email'=>$user_emaill,
		'user_phone'=>$user_phone,
		'user_address'=>$user_address
		); //�����������������
	}
$result->close();
$mysqli->close();
return $userList;	//����һ������
}

//�޸��û���Ϣ
function update($updateArray){
	$mysqli=DBConn::getConn();
	$mysqli->query("set names gb2312");	//ת���ַ������ʽ
	$query="update user set user_psw=?,user_sex=?,user_email=?,user_phone=?,user_address=? where user_id=?";
	$result=$mysqli->param($query);
	$result->bind_param("sssssi",$user_psw,$user_sex,$user_email,$user_phone,$user_address,$user_id);	//������
	$user_psw=$updateArray['user_password'];
	$user_sex=$updateArray['user_sex'];
	$user_email=$updateArray['user_email'];
	$user_phone=$updateArray['user_phone'];
	$user_address=$updateArray['user_address'];
	$user_id=$updateArray['user_id'];
	$result->execute();
	$result->close();
}


//ɾ���û���Ϣ
function delete($id){
	$mysqli=DBConn::getConn();
	$mysqli->query("set names gb2312");
	$query="delete from user where user_id=?";
	$result=$mysqli->prepare($query);
	$result->bind_param("i",$user_id);	//������
	$user_id=$id;
	$result->execute();
	$mysqli->close();
}

}

?>