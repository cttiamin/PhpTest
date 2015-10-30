<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<%
dim i,a(20)                  '定义变量i
for i=1 to 20
a(i)=i						'a(i)值等于i，循环二十次
response.write a(i)				'输出数组a(i)
response.Write(i)&"<br>"


next

dim b
for each b in a				'b的值在a(b) 里
response.write b &"<br>"
next

%>



</body>
</html>
