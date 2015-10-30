<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<%
dim i           '定义变量i
for i=1 to 100 step 3    '循环1到100 ,隔3位循环
if i=10 then             '当 i =10 的时候 则输出
response.write "停止循环了<br>"
exit for  				 '并且停止循环
end if
response.write i&"<br>"   '输出i 的值
next
%>



</body>
</html>
