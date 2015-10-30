<?php
   try {
   $soap = new SoapClient(null, array('location' => "http://127.0.0.1/soap/server.php",'uri' => "soap_server"));											//实例化SoapClient对象
   $name="Sunyang";							//编写用户名称
   $hello = $soap->soap_sayHello($name);				//调用服务器sayHello函数
   	print_r($hello);								//输出获得的服务器响应结果   
}catch (SoapFault $fault){	
   echo "错误[$fault->faultcode]：$fault->faultstring";		//捕捉错误
}
?>
