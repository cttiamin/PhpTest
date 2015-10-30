<?
//引入运行库文件	
include('lib/nusoap.php');
try
{   
//定义实例化客户端方法的参数
$proxyhost = isset($_POST['host']) ? $_POST['host'] : '';
$proxyport = isset($_POST['port']) ? $_POST['port'] : '';
$proxyusername = isset($_POST['username']) ? $_POST['username'] : '';
$proxypassword = isset($_POST['password']) ? $_POST['password'] : '';
$useCURL = isset($_POST['curl']) ? $_POST['curl'] : '0';
//实例化客户端
$client = new nusoap_client("http://localhost/28.7/server.php", false,
						$proxyhost, $proxyport, $proxyusername, $proxypassword);
//预编写用户信息
$username='sunyang';
$password='1234567';
$params= array('name'=>$username,'pwd'=>$password);
//调用服务端登录验证方法，取得结果
$result = $client->call('login',$params);
//打印结果信息
print_r( $result);
}catch(soap_fault $fault)
{		
	//捕获系统错误信息
	echo "错误提示：$fault->faultcode, $fault->faultstring";
	$err = $client->getError();
	print_r($err);
	}
	
?>