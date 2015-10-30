<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
dim kdy
kdy=request("keyword")

%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
您刚才搜索的关键字是:<%=request.form("keyword")%>
你现在所在页面的ID:<%=request("ID")%>
</body>
</html>
