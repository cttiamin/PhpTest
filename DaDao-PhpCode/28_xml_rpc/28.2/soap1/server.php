<?php
$soap = new SoapServer(null,array('uri'=>"soap_server"));	//��������˶���		
$soap->addFunction('soap_sayhello');					//�����ע��sayHello����
$soap->handle();									
function soap_sayHello($name) 						//�����sayHello����
{
   if (!isset($name)) 	
   {
      return new SoapFault('1', '�û�����Ϊ�գ�');
   }
   else
   {
      return 'Hello '.$name;
   }
}
?>
