<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<%
dim str,str1,i,a
str="abcdefghijklmnopqrstuvwxyz"
randomize()  '语句初始化随机数生成器

for i=1 to 15
a=(rnd()*100) mod 26+1
 str1=str1&mid(str,a,1)
next
response.Write(str1)
%>
</body>
</html>
