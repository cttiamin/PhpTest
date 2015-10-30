<?php
//获得SOAP客户端
$client = new SoapClient('http://localhost/28.3/configure.wsdl');
$say = $client->hello('Sunyang');
echo $say;
?>