<?php
//���SOAP�ͻ���
$client = new SoapClient('http://localhost/28.3/configure.wsdl');
$say = $client->hello('Sunyang');
echo $say;
?>