<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ޱ����ĵ�</title>
</head>

<body>
<%
  Dim fso, f1, ts, s
   Const ForReading = 1  '����һ������
   Set fso = server.CreateObject("Scripting.FileSystemObject")  '��������
   Set f1 = fso.CreateTextFile("g:\aaa\testfile.txt", True)			  
   '��ߵ��ļ�����ǰ����ļ��� ָ��������λ��
   
   ' дһ�С�
   Response.Write "Writing file <br>"
   f1.WriteLine "Hello World"    '���ļ���д��һ������
   f1.WriteBlankLines(1)		 'д��һ���հ���	
   f1.Close						 '�ر��ļ�	
   
   ' ��ȡ�ļ������ݡ�
   Response.Write "Reading file <br>"
   Set ts = fso.OpenTextFile("g:\aaa\testfile.txt", ForReading) 'forreadingΪ��
   s = ts.ReadLine		'��ȡһ�и���S���ȥ
   Response.Write "File contents = '" & s & "'"  '���͵��ͻ��˴�������ȥ
   ts.Close			'�رն���
%>
</body>
</html>
