<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>

<table width="299" border="1">
<%
dim i,counter                    	'定义变量i
i=1
counter=0 							'counter 的值为
do while i<100						
response.write i&"<br>"				
i=i+7								'i为加7循环
counter=counter+1					'counter为递加循环
loop						
response.Write"一共循环了"&counter&"次"

'dim i  
'i=1
'do until i=31    '循环30次
%>
  <tr>
    <td align="center"><%=i%></td>
  </tr>
  <%
'  i=i+2    '每次加2    
'  loop
 ' response.Write "  <tr><td align=center>这里是什么</td></tr>"
  %>
  
</table>
</body>
</html>
