<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<%
dim i       '�������i
response.Write "<table border=1><tr>"	'������Ŀ�ʼ��ǣ����еĿ�ʼ���
for i=1 to 20		'i�Ǵ�1ѭ����20
result=i*(i+1)		'result�� i��ֵ����  i+1��ֵ
call abc(result)	' abc�а���  result ֵ
next				'ѭ����β
response.Write "</tr></table>"	'������Ľ�����ǡ� ���еĽ������
sub abc(num)			'����abc �ı���
 response.write "<td align=center>" & num &"</td>"		'���td �е�ֵ
end sub					'�����������


%>



</body>
</html>
