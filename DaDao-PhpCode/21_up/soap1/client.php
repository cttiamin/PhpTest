<?php
   try {
   $soap = new SoapClient(null, array('location' => "http://127.0.0.1/soap/server.php",'uri' => "soap_server"));											//ʵ����SoapClient����
   $name="Sunyang";							//��д�û�����
   $hello = $soap->soap_sayHello($name);				//���÷�����sayHello����
   	print_r($hello);								//�����õķ�������Ӧ���   
}catch (SoapFault $fault){	
   echo "����[$fault->faultcode]��$fault->faultstring";		//��׽����
}
?>
