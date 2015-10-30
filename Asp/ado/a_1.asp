<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>

<!--#include file="conn.asp" -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/D  TD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<div align="center">
  <%
dim SName,Sex,Age,Course,Intro,sqlstr
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
sqlstr="insert into students values('"&SName&"',"&sex&","&age&",'"&Course&"','"&Intro&"')"
'response.write sqlstr
'response.end
conn.execute sqlstr
conn.close
set conn=nothing
response.write "记录已经插入到数据库中"
end if



%>
  
  <a href="a.asp">返回</a></div>
</body>
</html>
