<?php
//包含库文件
include("lib/xmlrpc.php");
//定义调试常量
define("XMLRPC_DEBUG", 1);

//定义用户信息
$name='sunyang';
$password='123456';

//格式化用户信息
 $params = array(XMLRPC_prepare($name),XMLRPC_prepare($password));
list($success,$result)  = XMLRPC_request("localhost", "/xml-rpc/server.php", "login",$params,''); 
//打印响应结果
print_r($result);
XMLRPC_debug_print();
?>


