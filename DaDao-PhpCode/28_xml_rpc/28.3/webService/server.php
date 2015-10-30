<?php
//引入运行库文件
require_once('lib/nusoap.php'); 
//实例化SOAP服务端对象
$server = new soap_server(); 
//配置WSDL文件
$server->configureWSDL('WSDL Configure'); 		  
//用户注册
$server->register('login',array('name' => 'xsd:string', 'pwd' => 'xsd:string'),array('return' => 'xsd:string')); 							
// 验证用户登录信息
function login($name, $pwd) 
{
   if ($name=='sunyang'&&$pwd=='123456')	
   {
     return 'login ok'; 
   }
   else
   {
   	    return '<p>Login Failed !</p>'.'Check your username and password !';           
   }
}
$server->service($HTTP_RAW_POST_DATA); 
?>