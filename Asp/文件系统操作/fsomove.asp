<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
</head>

<body>
<%  
Dim fso, f1, f2, s
   Set fso = Server.CreateObject("Scripting.FileSystemObject")
   Set f1 = fso.CreateTextFile("c:\testfile.txt", True)
   Response.Write "Writing file <br>"
   '写一行。
   f1.Write ("This is a test.")
   '关闭文件。
   f1.Close
   Response.Write "Moving file to c:\tmp <br>"
   '获取 C 的根目录(C:\)中的文件的句柄。
   Set f2 = fso.GetFile("c:\testfile.txt")
   '把文件移动到 \tmp 目录。
   f2.Move ("c:\tmp\testfile.txt")
   Response.Write "Copying file to c:\temp <br>"
   '把文件复制到 \temp 目录。
   f2.Copy ("c:\temp\testfile.txt")
   Response.Write "Deleting files <br>"
   '获得文件当前位置的句柄。
   Set f2 = fso.GetFile("c:\tmp\testfile.txt")
   Set f3 = fso.GetFile("c:\temp\testfile.txt")
   '删除文件。
   f2.Delete
   f3.Delete
   Response.Write "All done!"

 %>
</body>
</html>
