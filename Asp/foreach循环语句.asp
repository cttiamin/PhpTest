<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<%
dim i,a(20)                  '�������i
for i=1 to 20
a(i)=i						'a(i)ֵ����i��ѭ����ʮ��
response.write a(i)				'�������a(i)
response.Write(i)&"<br>"


next

dim b
for each b in a				'b��ֵ��a(b) ��
response.write b &"<br>"
next

%>



</body>
</html>
