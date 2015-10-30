<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>

<%
dim i
for i=1 to request.ServerVariables.count
response.Write "<font color=blue>"&request.ServerVariables.key(i)&"</font><font color=red> is <font>"
response.Write "<font color=green>"&request.ServerVariables.item(i)&"</font><br>"
next


%><br />
<br />
<br />
服务器端环境变量总数为<%=request.ServerVariables.count%>
</body>
</html>
