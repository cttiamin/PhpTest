<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<p>使用request.form索引：
  <%
aa=request.Form(1)
if aa<>"" then
response.Write aa
end if
%>
</p>
<p>使用request.form(表单名) :<%=request.form("name2")%>
</p>
从客户端接受的数据为：
<%
response.write request.form.count
%>
</body>
</html>
