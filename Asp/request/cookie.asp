<% 
nickname=Request.Form("nick")
Response.Cookies("nick")=nickname
' 用 response 对象将用户名写入 Cookie 之中 
Response.Write " 欢迎 "&Request.Cookies("nick")&" 光临！" 
%> 
<html>
<head>
<title>cookie</title> 
</head> 
<body> 
<form method="POST" action="4-8.asp"> 
<p><input type="text" name="nick"> 
<input type="submit" value=" 提交 " name="B1">
<input type="reset" value=" 重填 " name="B2"></p>
</form> 
</body>
</html>
