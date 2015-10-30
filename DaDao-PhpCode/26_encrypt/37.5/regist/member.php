<?php
//对话开始
session_start();
echo "用户专用页面<br>";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>用户页面</title>
</head>
<body>

<?php
//解密函数
function decrypt($decrypt,$key){
	//对加密信息进行解码
	$decoded=base64_decode($decrypt);
	//初始化向量
	$iv=mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_DES,MCRYPT_MODE_ECB),MCRYPT_RAND);
	//对信息进行解密
	$decrypted=mcrypt_decrypt(MCRYPT_DES,$key,$decoded,MCRYPT_MODE_ECB,$iv);
	return $decrypted;
}
//如果用户已经登录
if (isset($_SESSION['userinfo'])) {
	//取得用户SESSION
	$u=$_SESSION['userinfo'];
	echo "您好 ".$u['username']."，请在下边文本框内输入注册时得到的密钥以阅读我们为您提供的机密文件<br>";
		?>
		<form action="" method="POST">
		密钥：<input type="password" name="userkey"/><input type="submit" value="提交密钥信息"/>
		</form>
		<a href="logout.php">登出</a><br>
		<?php
		//显示解密后的文件内容
		if(!empty($_REQUEST['userkey'])){
			echo "机密文件内容：".decrypt($_SESSION['sd'],$_POST['userkey'])."<BR>";
		}
}
else{ echo "本页面只为登录用户提供信息<br>";
?>
<a href="login.php">登录</a><br/>
<a href="regist.php">注册</a>
<?php
}?>
</body>
</html>