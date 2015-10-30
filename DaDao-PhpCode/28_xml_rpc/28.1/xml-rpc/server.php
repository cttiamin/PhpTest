<?php
//引入运行库文件
include("lib/xmlrpc.php");
//定义调试跟踪常量
define("XMLRPC_DEBUG", 1);
//定义处理请求方法的数组
$methods = array(); 
$methods['login']  = 'login';
$methods['error'] = 'error'; 
//获得用户传入的方法名和参数
$client_request = XMLRPC_parse($HTTP_RAW_POST_DATA); 
//获得请求的方法
$mName = XMLRPC_getMethodName($client_request); 
//获得请求的参数
$params = XMLRPC_getParams($client_request); 
//根据方法名调用处理请求的方法
if(!($mName==$methods['login']))
{ 
	$methods['error']($mName);
}
else{ 
   $methods[$mName]($params);  
   
}
//验证登录信息
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
//处理错误的请求
function error()
{
	return XMLRPC_error("1", "method name error！"); 
}

?>