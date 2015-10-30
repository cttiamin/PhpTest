<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<%
dim abc,bcd
abc=request.querystring("name")
bcd=request.form("name1")
if abc<>"" then
response.write "您刚才输入(get方式)的内容是："&abc&"<br>"
end if
if bcd<>"" then
response.write "您刚才输入(post方式)的内容是："&bcd&"<br>"
end if
%>
<form id="form1" name="form1" method="get" action="request_querystring举例.asp">
  get提交方式:
  <input name="name" type="text" value="请输入内容" onclick="this.value=''" />
  <input type="submit" name="Submit" value="提交" />
</form>
<form id="form2" name="form2" method="post" action="request_querystring举例.asp">
  post提交方式:
    <input name="name1" type="text" value="请输入内容" onclick="this.value=''" />
  <input type="submit" name="Submit1" value="提交" />
</form>
</body>
</html>
