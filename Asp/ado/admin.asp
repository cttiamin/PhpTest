<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp" -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<%
dim AName,PWord,sqlstr,flag
 AName=request.form("AName")
 PWord=request.Form("PWord")
 if AName<>"" and PWord<>"" then
	 sqlstr="select * from admin where AName='"&AName&"'"
	 set rs=server.CreateObject("ADODB.recordset")
	 rs.open sqlstr,conn,1,3
   if not rs.eof then
		 'response.Write sqlstr
		 'response.End
		 flag=0
		 if rs("PWord")=PWord then
			 session("UID")=rs("ID")
			 flag=1
		 else
				 response.write"密码错误"
				 'response.redirect "login.asp"
		 end if

		  if flag=1 then
		  response.write"登录成功"
		  else
		  response.write"登录失败"
		  end if
	 else
		 response.Write("用户名不存在!")
		 'response.redirect "login.asp"
	 end if
	 rs.close
	 conn.close
	 set rs=nothing
	 set conn=nothing
 else
    response.write ("<script>alert('请您正确登录后再试！')</script>")
	'response.redirect "login.asp"
 end if
%>
</body>
</html>
