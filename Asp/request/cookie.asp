<% 
nickname=Request.Form("nick")
Response.Cookies("nick")=nickname
' �� response �����û���д�� Cookie ֮�� 
Response.Write " ��ӭ "&Request.Cookies("nick")&" ���٣�" 
%> 
<html>
<head>
<title>cookie</title> 
</head> 
<body> 
<form method="POST" action="4-8.asp"> 
<p><input type="text" name="nick"> 
<input type="submit" value=" �ύ " name="B1">
<input type="reset" value=" ���� " name="B2"></p>
</form> 
</body>
</html>
