<?php
//对话开始
session_start();
if (isset($_POST['username'])&&isset($_POST['password'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	//数据库连接
	$db_con=new mysqli('localhost','root','root','regist');
	//数据库连接失败，返回错误提示
	if (mysqli_connect_errno()) {
		echo 'connect failed'.mysqli_connect_error();
		exit();
	}
	//通过用户名和经过md5算法加密操作后的密码在数据库中进行查询
	$query="select * from userinfo where username='$username' and password=md5('$password')";
	$result=$db_con->query($query);
	//如果查询结果个数大于0的话说明登录成功，将当前用户信息保存在对话SESSION中
	if ($result->num_rows>0) {
		$_SESSION['userinfo']=$result->fetch_array();
	}
	//关闭数据库连接
	$db_con->close();
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>用户登录</title>
</head>
<body>
<?php
//加密函数
function encrypt($encrypt,$key){
	//初始化向量
	$iv=mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_DES,MCRYPT_MODE_ECB),MCRYPT_RAND);
	//对信息进行加密
	$passcrypt=mcrypt_encrypt(MCRYPT_DES,$key,$encrypt,MCRYPT_MODE_ECB,$iv);
	//对加密信息进行编码
	$encode=base64_encode($passcrypt);
	return $encode;
}
//判断用户登录成功
if (isset($_SESSION['userinfo'])) {
	echo "用户已经登录<br>";
	//将信息进行加密操作,并将加密完毕的信息放入名为sd的SESSION中
	$content="三扬科技——技术凝聚实力，专业创造辉煌";
	$_SESSION['sd']=encrypt($content,$_SESSION['userinfo']["userkey"]);
	echo '<a href="logout.php">登出</a>';
}
//登录失败
elseif (isset($username)) {
	echo "用户名或密码错误，登录失败";
}
//没有登录
else echo '没有登录！';
?>
<form action="login.php" method="POST">
<table>
	<tr>
		<td>用户名</td><td><input type="text" name="username"/></td>
	</tr>
	<tr>
		<td>密码</td><td><input type="password" name="password"/></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="登录"/></td>
	</tr>
</table>
</form>
<!--进入用户区链接-->
<a href="member.php">用户区</a>
</body>
</html>