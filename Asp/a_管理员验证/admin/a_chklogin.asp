<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>

<!--#include file="a_conn.asp" -->
<%
dim adminuser,pwd,rs,sqlstr
   adminuser=request.Form("adminuser")
   pwd=request.Form("pwd")
   
   set rs=server.CreateObject("adodb.recordset")
  sqlstr="select * from [admin] where adminuser='"&adminuser&"'"
	rs.open sqlstr,conn,0,1
if rs.eof then
	  response.write("<script language=javascript>")
	  response.write("alert('�û���������');")
	  response.write("location='a_login.asp';")
	  response.write("</script>")
else
	if pwd=rs("pwd") then
	session("adminuser")=adminuser
	session("flag")=rs("flag")
	response.write("<script language=javascript>")
	response.write("alert('��½�ɹ�');")
	response.write("location='a_aaa.asp';")
	response.write("</script>")
	else 
	response.write("<script language=javascript>")
	response.write("alert('������û���������');")
	response.write("location='a_login.asp';")
	response.write("</script>")
	end if
end if
		

%>
