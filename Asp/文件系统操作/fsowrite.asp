<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
</head>

<body>
<%
   Dim fso, tf
   Set fso = Server.CreateObject("Scripting.FileSystemObject")
   Set tf = fso.CreateTextFile("c:\testfile.txt", True)
   ' 写一行，并且带有新行字符。
   tf.WriteLine("Testing 1, 2, 3.") 
   '向文件写三个新行字符。        
   tf.WriteBlankLines(3) 
   '写一行。
   tf.Write ("This is a test.") 
   tf.Close
%>

</body>
</html>
