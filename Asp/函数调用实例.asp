<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<%
dim i,a      '�������i �� a
for i=1 to 20	' ѭ��20��
a=abc(3)			
response.Write a & "<br>"  '��� a
next
function abc(num)		'���庯�� abc(num)  ��Ϊ3 
abc=num*(num+1)			'abc = 3*(3+1)   ֵӦΪ12
end function		
%>



</body>
</html>
