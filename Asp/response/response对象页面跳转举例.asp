<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
response.Redirect "http://www.sina.com.cn"
%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<%
select case request.form("browsertype")
case "internet explorer"
	response.Redirect "http://www.sina.com.cn"
case "netscape navigator"
	response.Redirect "http://www.sohu.com.cn"
end select
%>
</body>
</html>
