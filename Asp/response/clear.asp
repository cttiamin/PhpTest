<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
</head>

<body>
<%
  response.Write("hello asp")
  response.clear()
  response.Write("clear 语句之前内容被清除了")

%>
<form>
<input type="text" >
<input type="button" value="显示的">
</form>

</body>
</html>
