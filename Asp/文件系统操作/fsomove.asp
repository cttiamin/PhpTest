<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ޱ����ĵ�</title>
</head>

<body>
<%  
Dim fso, f1, f2, s
   Set fso = Server.CreateObject("Scripting.FileSystemObject")
   Set f1 = fso.CreateTextFile("c:\testfile.txt", True)
   Response.Write "Writing file <br>"
   'дһ�С�
   f1.Write ("This is a test.")
   '�ر��ļ���
   f1.Close
   Response.Write "Moving file to c:\tmp <br>"
   '��ȡ C �ĸ�Ŀ¼(C:\)�е��ļ��ľ����
   Set f2 = fso.GetFile("c:\testfile.txt")
   '���ļ��ƶ��� \tmp Ŀ¼��
   f2.Move ("c:\tmp\testfile.txt")
   Response.Write "Copying file to c:\temp <br>"
   '���ļ����Ƶ� \temp Ŀ¼��
   f2.Copy ("c:\temp\testfile.txt")
   Response.Write "Deleting files <br>"
   '����ļ���ǰλ�õľ����
   Set f2 = fso.GetFile("c:\tmp\testfile.txt")
   Set f3 = fso.GetFile("c:\temp\testfile.txt")
   'ɾ���ļ���
   f2.Delete
   f3.Delete
   Response.Write "All done!"

 %>
</body>
</html>
