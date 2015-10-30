<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp" -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<div align="center">
  <%
dim ID,SName,Sex,Age,Course,Intro,sqlstr
ID=request.form("ID")
Sname=request.Form("SName")
if Sname="" then
response.Write "输入有错误，学生姓名不能为空"
else
Sex=request.Form("Sex")
	  if sex="M" then
		  sex=1
	  else
		  sex=0
	  end if
Age=request.Form("Age")
Course=request.Form("Course1")&","&request.Form("Course2")&","&request.Form("Course3")&","&request.Form("Course4")&","&request.Form("Course5")&","&request.Form("Course6")&","&request.Form("Course7")&","&request.Form("Course8")&","&request.Form("Course9")&","&request.Form("Course0")
Intro=request.Form("Intro")
'response.write Course
'response.end
sqlstr="update students set SName='"&SName&"',sex="&sex&",Age="&age&",Course='"&Course&"',Intro='"&Intro&"' where ID="&ID
response.write sqlstr
response.write "<br>"
'response.end
conn.execute sqlstr
conn.close
set conn=nothing
response.write "您成功修改了"&SName&"的信息"
end if



%>
  
  <a href="a.asp">返回</a></div>
</body>
</html>
