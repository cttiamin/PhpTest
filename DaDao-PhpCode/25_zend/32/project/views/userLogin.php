<html>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<head>
<title>用户登录</title>
</head>
<body>
<form action="../controllers/LoginController.php" method="post">
<table>
<input type="hidden" name="action" value="login">
<tr>
<td>用户名：<input type="text" name="name" value=""></td>
</tr>
<tr>
<td>密码： <input type="password" name="password" value=""></td>
</tr>
<tr>
<tr>
<td><input type="submit" name="submit" value="submit"></td>
</tr>
</table>
</form>
</body>
</html>