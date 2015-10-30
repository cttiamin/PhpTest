<?php
//对话开始
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>用户注册页面</title>
</head>
<body>
<!--表单提交给脚本自身-->
<form action="" method="POST">
<table>
	<tr>
		<td>用户名：</td><td><input type="text" name="username" value='<?php echo $_POST['username']?>'/></td>
	</tr>
	<tr>
		<td>用户密码：</td><td><input type="password" name="password" value='<?php echo $_POST['password']?>'/></td>
	</tr>
</table>
<input type="submit" value="注册"/>
</form>
<?php
if (isset($_POST['username'])&&isset($_POST['password'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	//数据库连接
	$db_con=new mysqli('localhost','root','root','regist');
	//如果数据库连接失败，给出错误提示
	if (mysqli_connect_errno()) {
		echo 'connect failed'.mysqli_connect_error();
		exit();
	}
	//使用用户名在数据库中查找
	$query="select * from userinfo where username='$username'";
	$result=$db_con->query($query);
	//判断用户名是否已经在数据表中存在
	if ($result->num_rows>0) {
		//用户名已经存在，无法注册
		echo "用户名已经存在，请重新注册";
	}else {
		//生成随机密钥
		function randStr($len=10){
			$chars='abcdefghijklmnopqrstuvwxyz0123456789';
			$string="";

			while (strlen($string)<$len) {
				$string.=substr($chars,(rand()%strlen($chars)),1);
			}
			return $string;
		}
		do {
			$userkey=randStr(6);
			$queryRand="select * from userinfo where userkey=$userkey";
			$resultRand=$db_con->query($queryRand);
		}while ($resultRand->num_rows>0);
		//将用户信息保存在数据库中，并使用md5算法对其密码进行加密
		$insert="insert into userinfo (username,password ,userkey) values ('$username',md5('$password'),'$userkey')";
		if ($result=$db_con->query($insert)) {
			//告知用户密钥
			echo "用户注册成功,你的密钥为:<BR>$userkey<BR>请妥善保管";?>
			<!--登录页面链接-->
			<a href="login.php">点击这里进行登录</a>
		<?php
		}else {
			echo "注册失败";
		}
	}
	//关闭数据库连接
	$db_con->close();
}
?>
</body>
</html>