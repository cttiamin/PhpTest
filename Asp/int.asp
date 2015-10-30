<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>取整函数举例</title>
</head>

<body>
<%
dim a,b
a=2.353
b=3.241
c=a+b
response.Write "int(8.7)="&int(8.7)&"<br>"   '取整函数
response.Write "fix(8.7)="&fix(8.7)&"<br>"
response.Write "int(-8.7)="&int(-8.7)&"<br>"
response.Write "fix(-8.7)="&fix(-8.7)&"<br>"
response.Write "a+b取整是:"& int(c)&"<br>"
response.write "asdfasdf====="& round(c,2)


%>
</body>
</html>
