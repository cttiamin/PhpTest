<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp" -->
<%
dim adminuser,pwd
   adminuser=request.Form("adminuser")
   pwd=request.Form("pwd")
   
dim rs,sqlstr
  set rs=server.CreateObject("adodb.recordset")
  sqlstr="select * from [admin] where adminuser='"&adminuser&"'"
  rs.open sqlstr,conn,0,1
  if rs.eof then
	  response.write("<script language=javascript>")
	  response.write("alert('用户名不存在');")
	  response.write("location='login.asp';")
	  response.write("</script>")
  else
    if pwd=rs("pwd") then
       session("adminuser")=adminuser 
	   session("flag")=rs("flag")
		  response.write("<script language=javascript>")
		  response.write("alert('登录成功');")
		  response.write("location='index.asp';")
		  response.write("</script>")
     else
		  response.write("<script language=javascript>")
		  response.write("alert('错误的用户名和密码');")
		  response.write("location='login.asp';")
		  response.write("</script>")
	 end if
  end if
%>