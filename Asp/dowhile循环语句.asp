<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>

<table width="299" border="1">
<%
dim i,counter                    	'�������i
i=1
counter=0 							'counter ��ֵΪ
do while i<100						
response.write i&"<br>"				
i=i+7								'iΪ��7ѭ��
counter=counter+1					'counterΪ�ݼ�ѭ��
loop						
response.Write"һ��ѭ����"&counter&"��"

'dim i  
'i=1
'do until i=31    'ѭ��30��
%>
  <tr>
    <td align="center"><%=i%></td>
  </tr>
  <%
'  i=i+2    'ÿ�μ�2    
'  loop
 ' response.Write "  <tr><td align=center>������ʲô</td></tr>"
  %>
  
</table>
</body>
</html>
