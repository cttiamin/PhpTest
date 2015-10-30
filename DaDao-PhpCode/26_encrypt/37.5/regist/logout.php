<?php
//对话开始
session_start();
//将名为userinfo的SESSION赋值给$oldUser
$oldUser=$_SESSION['userinfo'];

//关闭对话
session_destroy();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>登出</title>
</head>
<body>
<?php
//判断是否用户已经登录，给出提示
if (!empty($oldUser)) {
	//将用户SESSION清除
	unset($_SESSION['userinfo']);
	unset($_SESSION['sd']);
	echo "登出<br/>";
}else echo "用户尚未登录无法进行登出操作<br/>";
?>
<a href="login.php">回到登录页面</a><br/>
<a href="regist.php">回到注册页面</a> 
</body>
</html>