<?php
//�������ļ�
include("lib/xmlrpc.php");
//������Գ���
define("XMLRPC_DEBUG", 1);

//�����û���Ϣ
$name='sunyang';
$password='123456';

//��ʽ���û���Ϣ
 $params = array(XMLRPC_prepare($name),XMLRPC_prepare($password));
list($success,$result)  = XMLRPC_request("localhost", "/xml-rpc/server.php", "login",$params,''); 
//��ӡ��Ӧ���
print_r($result);
XMLRPC_debug_print();
?>


