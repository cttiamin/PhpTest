<?php
//���SOAP�����
$server = new SoapServer('configure.wsdl');	
//�������˷���
  function hello($name){
		return 'Hello '.$name;
  }  	
  //ע�����˵ķ���
$server->addFunction(array('hello'));
$server->handle();
?>