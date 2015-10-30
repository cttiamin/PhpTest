<%@Language=VBScript%>
<html>
<head><title>Response.Write的基本用法</title></head>
<body>
<%
Response.Write"<p>你好！！"
t=now()
Response.Write"<p>现在是："& t &"<br>"
cht1="谢谢！"
cht2="欢迎光临！"
Response.Write cht1 & cht2

%>
</body>
</html>
