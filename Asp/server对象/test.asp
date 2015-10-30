<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<%
response.Write server.MapPath("test.asp")&"<br>"		'本页的物理路径
response.Write server.MapPath("\test.asp")&"<br>"
response.Write server.MapPath("/test.asp")&"<br>"
%>
</body>
</html>
