<?php
//�������п��ļ�
require_once('lib/nusoap.php'); 
//ʵ����SOAP����˶���
$server = new soap_server(); 
//����WSDL�ļ�
$server->configureWSDL('WSDL Configure'); 		  
//�û�ע��
$server->register('login',array('name' => 'xsd:string', 'pwd' => 'xsd:string'),array('return' => 'xsd:string')); 							
// ��֤�û���¼��Ϣ
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