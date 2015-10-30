<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<%
response.write "<table border=1>"
dim i                      '定义变量i
for i=1 to 100 step 5      'i的值只能是个数值变量,两个重复之间的循环变量变化为2

response.write "<tr>"
response.write "<td>"
response.write i&"<br>"
response.write "</td><td>每次都加上五</td>"
response.write "</tr>"

next
response.write "</table>"
%>



</body>
</html>
