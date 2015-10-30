<?php
$soap = new SoapServer(null,array('uri'=>"soap_server"));	//创建服务端对象		
$soap->addFunction('soap_sayhello');					//服务端注册sayHello函数
$soap->handle();									
function soap_sayHello($name) 						//服务端sayHello函数
{
   if (!isset($name)) 	
   {
      return new SoapFault('1', '用户名称为空！');
   }
   else
   {
      return 'Hello '.$name;
   }
}
?>
