<?
//�������п��ļ�	
include('lib/nusoap.php');
try
{   
//����ʵ�����ͻ��˷����Ĳ���
$proxyhost = isset($_POST['host']) ? $_POST['host'] : '';
$proxyport = isset($_POST['port']) ? $_POST['port'] : '';
$proxyusername = isset($_POST['username']) ? $_POST['username'] : '';
$proxypassword = isset($_POST['password']) ? $_POST['password'] : '';
$useCURL = isset($_POST['curl']) ? $_POST['curl'] : '0';
//ʵ�����ͻ���
$client = new nusoap_client("http://localhost/28.7/server.php", false,
						$proxyhost, $proxyport, $proxyusername, $proxypassword);
//Ԥ��д�û���Ϣ
$username='sunyang';
$password='1234567';
$params= array('name'=>$username,'pwd'=>$password);
//���÷���˵�¼��֤������ȡ�ý��
$result = $client->call('login',$params);
//��ӡ�����Ϣ
print_r( $result);
}catch(soap_fault $fault)
{		
	//����ϵͳ������Ϣ
	echo "������ʾ��$fault->faultcode, $fault->faultstring";
	$err = $client->getError();
	print_r($err);
	}
	
?>