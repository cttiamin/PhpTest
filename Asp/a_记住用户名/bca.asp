<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
dim a,b,c
a=request.Form("aaa")
b=request.form("bbb")
c=request.form("ssex")
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<%

response.Write("你刚才输入的用户名是："&a)
response.Write("<br>你刚才输入的密码是："&b)
response.Write("<br>你刚才选择的性别是："&c)
%>
</body>
</html>
