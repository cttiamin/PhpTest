<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<%
dim abc
abc="  �������廪�򲩵���ģ��ѧϰ�γ�"
response.Write "left(abc,3)=" &left(abc,5)&"..<br>"   '����߿�ʼ�Գ���ֵ��ȡ���ַ���	 ����߿�ʼ	����5λ���Һ���λ��..����
response.Write "right(abc,3)=" & right(abc,3)&"<br>"   '���ұ߿�ʼ�Գ���ֵ��ȡ���ַ���	  ���ұ߿�ʼ  ����3λ 
response.Write "mid(abc,3,5)=" & mid(abc,3,7)&"<br>"   '�ӿ�ʼλ���Գ���ֵ��ȡ���ַ���     �ӿ�ʼ��λ�������� 7 λ
  
%>
<br />
������ʾ�����ַ������Ȳ��Ժ���    
<%=len(abc)%><br />     <!-- ȡabc ֵ �ĳ���  -->

<%
if len(ltrim(abc))>15 then  					'���abc�ĳ��ȣ�ȥ���ұ߿ո�����£�����15 ��
response.Write left(ltrim(abc),14)&"��<br>"		'�����abc ��14 ���ַ� ����...����
else											'�������
response.Write abc								'�����abc ��ֵ
end if											'����
%><br />

</body>
</html>
