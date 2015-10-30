<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
</head>

<body>
<%
  Dim fso, f1, ts, s
   Const ForReading = 1  '定义一个常数
   Set fso = server.CreateObject("Scripting.FileSystemObject")  '创建对象
   Set f1 = fso.CreateTextFile("g:\aaa\testfile.txt", True)			  
   '后边的文件覆盖前面的文件， 指定创建的位置
   
   ' 写一行。
   Response.Write "Writing file <br>"
   f1.WriteLine "Hello World"    '向文件里写入一行文字
   f1.WriteBlankLines(1)		 '写入一个空白行	
   f1.Close						 '关闭文件	
   
   ' 读取文件的内容。
   Response.Write "Reading file <br>"
   Set ts = fso.OpenTextFile("g:\aaa\testfile.txt", ForReading) 'forreading为读
   s = ts.ReadLine		'读取一行赋到S里边去
   Response.Write "File contents = '" & s & "'"  '发送到客户端代码里面去
   ts.Close			'关闭对象
%>
</body>
</html>
