<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<%
response.write "<table border=1>"
dim i                      '�������i
for i=1 to 100 step 5      'i��ֵֻ���Ǹ���ֵ����,�����ظ�֮���ѭ�������仯Ϊ2

response.write "<tr>"
response.write "<td>"
response.write i&"<br>"
response.write "</td><td>ÿ�ζ�������</td>"
response.write "</tr>"

next
response.write "</table>"
%>



</body>
</html>
