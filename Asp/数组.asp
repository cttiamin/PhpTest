<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
 <!--
<%
dim car() 
redim car(10) 
car(0)="��ɫ"
car(1)="��ɫ"
response.write car(1)
'response.write "<br>"
'redim preserve car(20)

'response.write car(1)
%>
-->
<%
dim ab(5,5,5)  '����һ�����飬���ܳ���5��
ab(0,0,5)="�����Ǹ��ú���"		
ab(0,1,0)="֪������"
'response.write ab(0,1,0)   '������� ab(0,1,0) ��ֵ
%>
<%
dim a,b,c
a=2
b=20
c=a & b
'response.write c
%>
</body>
</html>
