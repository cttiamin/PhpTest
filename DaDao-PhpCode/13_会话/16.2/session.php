<?php
/*��һ�����ݿ�����,��ѡ��һ�����ݿ�*/
function php_session_open($session_path,$session_name){
	mysql_connect("localhost","root","123456")or die("�޷�����MySQL");
	mysql_select_db("sanyang") or die("�޷�ѡ�����ݿ�");	
}
/*�ر�������Դ*/
function php_session_close(){
	return true;
}
/*��ȡ�Ự����*/
function php_session_read($SID){
	$query="select data from session_table where SID='$SID' and expire >". time();
	$result=mysql_query($query);
	if (mysql_num_rows($result)){
		$row=mysql_fetch_assoc($result);
		$data=$row['data'];
		return $data;
	}else {
		return "";
	}
}
/*д��Ự����*/
function php_session_write($SID,$data){
$lifetime=get_cfg_var("session.gc_maxlifetime");
$expire=time()+	$lifetime;
$query="insert into session_table values ('$SID','$expire','$data')";
$result=mysql_query($query);
if (!$result){
	$query="update session_table set expire='$expire',data='$data' 
	        where SID='$SID' and expire >". time();
	$result=mysql_query($query);
}
}
/*���ٻỰ*/
function php_session_destory($SID){
	$query="delete from session_table where SID='$SID' ";
	$result=mysql_query($query);
}
/*��������*/
function php_session_garbage_collect($lifetime){
	$query="delete from session_table where expire <" .time()-$lifetime;
	$result=mysql_query($query);
	return mysql_affected_rows($result);
}
//�����溯��ʵ��
session_set_save_handler("php_session_open","php_session_close","php_session_read",
                          "php_session_write","php_session_destory","php_session_garbage_collect");
?>
