<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>
<%
dim a,b,c,d
 a=request("aaa")
 b=request("ssex")
 c=request("id")
 d=request.TotalBytes
%>
<body>
<p>你的用户名是：<%=a%></p>
<p>你的性别属于：<%=b%> </p>
<p>地址里的内容是:<%=c%></p>
共<%=d%>字节
</body>
</html>
