<?php
//�������п��ļ�
include("lib/xmlrpc.php");
//������Ը��ٳ���
define("XMLRPC_DEBUG", 1);
//���崦�����󷽷�������
$methods = array(); 
$methods['login']  = 'login';
$methods['error'] = 'error'; 
//����û�����ķ������Ͳ���
$client_request = XMLRPC_parse($HTTP_RAW_POST_DATA); 
//�������ķ���
$mName = XMLRPC_getMethodName($client_request); 
//�������Ĳ���
$params = XMLRPC_getParams($client_request); 
//���ݷ��������ô�������ķ���
if(!($mName==$methods['login']))
{ 
	$methods['error']($mName);
}
else{ 
   $methods[$mName]($params);  
   
}
//��֤��¼��Ϣ
function login($params){	
	if (!isset($params)){
     XMLRPC_error("2", "please enter your information");
  	}  else{
  	if ($params[0]=='sunyang') {
  		if ($params[1]=='123456') {
  			$result='login ok! ';
  			return XMLRPC_response(XMLRPC_prepare($result));
  		}else {
  			$result='please check your password!';
  			return XMLRPC_response(XMLRPC_prepare($result));
  		}
  	}else {
  		$result='please check your name!';
  		return XMLRPC_response(XMLRPC_prepare($result));
  	}		
	}
}
//������������
function error()
{
	return XMLRPC_error("1", "method name error��"); 
}

?>