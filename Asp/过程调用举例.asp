<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<%
dim i       '定义变量i
response.Write "<table border=1><tr>"	'输出表格的开始标记，和行的开始标记
for i=1 to 20		'i是从1循环到20
result=i*(i+1)		'result是 i的值乘以  i+1的值
call abc(result)	' abc中包含  result 值
next				'循环结尾
response.Write "</tr></table>"	'输出表格的结束标记。 和行的结束标记
sub abc(num)			'定义abc 的变量
 response.write "<td align=center>" & num &"</td>"		'输出td 中的值
end sub					'结束定义变量


%>



</body>
</html>
