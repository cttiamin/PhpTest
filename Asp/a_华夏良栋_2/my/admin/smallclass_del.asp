<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="../include/admincoon.asp" -->
<%
dim s_id,b_id,rs,sqlstr
set rs=server.CreateObject("adodb.recordset")
b_id=request.QueryString("b_id")
s_id=request.QueryString("s_id")
sqlstr="select id from [article] where s_id="&s_id
rs.open sqlstr,conn,0,1
if rs.eof then
  conn.execute "delete from smallclass where s_id="&s_id
  	response.Write("<script language=javascript>")
	response.Write("alert('ɾ���ɹ�');")
	response.Write("location='smallclass.asp?b_id="&b_id&"';")
	response.Write("</script>")

  
else
	response.Write("<script language=javascript>")
	response.Write("alert('������»������£���ɾ���������������º���ִ�д˲���');")
	response.Write("location='smallclass.asp?b_id="&b_id&"';")
	response.Write("</script>")
end if
rs.close

%>