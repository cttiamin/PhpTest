<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>

<%
dim dd  '�������dd
dd=now() '��������ֵΪ��ǰϵͳʱ��
response.write "���ڵ�ʱ����:"
response.Write dd '�����ǰʱ��
response.write "<br>�����Ǳ���"
response.write day(dd) '�������
response.write "<br>�����Ǳ��ܵ�"
response.write weekday(dd) '�����ǰ���ڵĵڼ���
response.write "��<br>"
response.write"������"
response.write month(dd) '�����ǰ�·�
response.write "��<br>"
response.write year(dd) '�����ǰ���
response.write "<br>"
response.write hour(dd) '�����ǰСʱ
response.write "<br>"
response.write minute(dd) '�����ǰ����
response.write "<br>"
response.write second(dd) '�����ǰ����
response.write "<br>"
response.write timevalue(dd) '�����ǰʱ���������(Сʱ-����-��)
response.write "<br>"
response.write datevalue(dd) '���ذ���ʱ���date������
%>
</body>
</html>
