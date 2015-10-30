<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<%
url=server.mappath("student.asp") 
urlb=server.mappath("b.txt") 
set fso=server.CreateObject("Scripting.FileSystemObject")
set ts=fso.OpenTextfile(url,1,true,0)
set ts1=fso.OpenTextFile(urlb,8,true,0)
dim str
do while (not ts.atendofstream)
str=ts.readline
response.Write str
ts1.writeline(str)
response.Write "<br>"
loop
ts.close
ts1.close
set ts=nothing
set ts1=nothing
set fso=nothing
response.Write url 
%>
</body>
</html>
