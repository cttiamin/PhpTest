<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp" -->
<%
dim username,pwd
   username=request.Form("username")
   pwd=request.Form("pwd")
   
dim rs,sqlstr
  set rs=server.CreateObject("adodb.recordset")
  sqlstr="select * from huiyuan where username='"&username&"'"
 
  rs.open sqlstr,conn,0,1
  if rs.eof then
	  response.write("<script language=javascript>")
	  response.write("alert('�û���������');")
	  response.write("location='userlogin.asp';")
	  response.write("</script>")
  else
    if pwd=rs("userpwd") then
       session("username")=username 
	   session("jibie")=rs("jibie")
		  response.write("<script language=javascript>")
		  response.write("alert('��¼�ɹ�');")
		  response.write("location='index.asp';")
		  response.write("</script>")
     else
		  response.write("<script language=javascript>")
		  response.write("alert('������û���������');")
		  response.write("location='userlogin.asp';")
		  response.write("</script>")
	 end if
  end if
%>