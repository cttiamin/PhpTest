<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>删除空格</title>
</head>

<body>
<%
dim abc
abc="  今  天好   "
response.Write "ltrim(abc)=你" & ltrim(abc)&"吗<br>"   '删除左边空格
response.Write "rtrim(abc)=你" & rtrim(abc)&"吗<br>"   '删除右边空格
response.Write "trim(abc)=你" & trim(abc)&"吗<br>"   '删除两端空格

%>
</body>
</html>
