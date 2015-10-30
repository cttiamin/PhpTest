<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<%
dim i,a      '定义变量i 和 a
for i=1 to 20	' 循环20次
a=abc(3)			
response.Write a & "<br>"  '输出 a
next
function abc(num)		'定义函数 abc(num)  上为3 
abc=num*(num+1)			'abc = 3*(3+1)   值应为12
end function		
%>



</body>
</html>
