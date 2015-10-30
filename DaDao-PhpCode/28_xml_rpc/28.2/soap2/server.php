<?php
//获得SOAP服务端
$server = new SoapServer('configure.wsdl');	
//定义服务端方法
  function hello($name){
		return 'Hello '.$name;
  }  	
  //注册服务端的方法
$server->addFunction(array('hello'));
$server->handle();
?>