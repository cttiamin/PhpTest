<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<%
dim abc,bcd
abc="abcdadfd"
bcd="a"
'response.Write "string(abc)="& string(6,abc) &"<br>"  '���ؾ���ָ�����ȵģ��ظ��ַ���ɵ��ַ���


'response.Write "space(8)=#"& space(8) &"#<br>"  '�ո��������ؾ���ָ����Ŀ�Ŀո���ɵ��ַ���

'response.Write "instr(2,abc,bcd,1)=#"& instr(2,abc,bcd,1) &"#<br>"  '�ַ���ƥ�亯��������ĳ�ַ�������һ�ַ����е�һ�γ��ֵ�λ��

str="abcABCdefDEF"
response.Write "��д��ĸ��:"& ucase(str) &"<br>"  '�����ַ�����д��ʽ
response.Write "Сд��ĸ��:"& lcase(str) &"<br>"  '�����ַ���Сд��ʽ

response.Write "�ַ���abc�����ַ���bcd:strcomp(abc,bcd,1)="& strcomp(abc,bcd,1) &"<br>"  '�ַ����ȽϺ�����
response.Write "�ַ���bcdС���ַ���abc:strcomp(bcd,abc,1)="& strcomp(bcd,abc,1) &"<br>"  '�ַ����ȽϺ�����
response.Write "�ַ������:strcomp(abc,abc,1)="& strcomp(abc,abc,1) &"<br>"  '�ַ����ȽϺ�����
%>
</body>
</html>
