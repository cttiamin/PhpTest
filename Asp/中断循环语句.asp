<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<%
dim i           '�������i
for i=1 to 100 step 3    'ѭ��1��100 ,��3λѭ��
if i=10 then             '�� i =10 ��ʱ�� �����
response.write "ֹͣѭ����<br>"
exit for  				 '����ֹͣѭ��
end if
response.write i&"<br>"   '���i ��ֵ
next
%>



</body>
</html>
