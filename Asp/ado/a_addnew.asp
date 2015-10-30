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
dim SName,Sex,Age,Course,Intro,sqlstr
if request.Form("SName")="" then
response.Write "输入有错误，学生姓名不能为空"
else
     sql="select * from students"
	 set rs=server.createobject("adodb.recordset")
	   	 rs.open sql,conn,3,3
	 	 rs.addnew
		 rs("Sname")=request.Form("SName")
	  if request.Form("Sex")="M" then
		  rs("sex")=1
	  else
		 rs("sex")=0
	  end if
		rs("Age")=request.Form("Age")
		rs("Course")=request.Form("Course1")&","&request.Form("Course2")&","&request.Form("Course3")&","&request.Form("Course4")&","&request.Form("Course5")&","&request.Form("Course6")&","&request.Form("Course7")&","&request.Form("Course8")&","&request.Form("Course9")&","&request.Form("Course0")
		rs("Intro")=request.Form("Intro")
		'response.write Course
		'response.end
		'response.write sqlstr
		'response.end
end if

response.write "记录已经插入到数据库中"

%>
  <a href="a.asp">返回</a></div>
</body>
</html>
