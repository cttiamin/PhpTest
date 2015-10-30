<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
  Post方法：<%
for i=1 to request.totalbytes
array1=request.binaryread(1)
response.write array1
next
%>
url:<%= Request.ServerVariables("Query_String")%></p>
<form id="form1" name="form1" method="post" action="">
  <input name="abc" type="text" id="abc" />
  <input name="bbb" type="submit" id="bbb" value="aaaaa" />
</form>
</body>
</html>
