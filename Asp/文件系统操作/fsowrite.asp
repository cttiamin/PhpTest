<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ޱ����ĵ�</title>
</head>

<body>
<%
   Dim fso, tf
   Set fso = Server.CreateObject("Scripting.FileSystemObject")
   Set tf = fso.CreateTextFile("c:\testfile.txt", True)
   ' дһ�У����Ҵ��������ַ���
   tf.WriteLine("Testing 1, 2, 3.") 
   '���ļ�д���������ַ���        
   tf.WriteBlankLines(3) 
   'дһ�С�
   tf.Write ("This is a test.") 
   tf.Close
%>

</body>
</html>
