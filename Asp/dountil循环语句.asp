<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<%
dim i                      '定义变量i
i=1
do until i>100		'到99
response.write i&"<br>"
i=i+7			'第次循环都加1
loop

%>



</body>
</html>
