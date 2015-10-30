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
	response.Write("alert('删除成功');")
	response.Write("location='smallclass.asp?b_id="&b_id&"';")
	response.Write("</script>")

  
else
	response.Write("<script language=javascript>")
	response.Write("alert('该类别下还有文章，请删除该类下所有文章后再执行此操作');")
	response.Write("location='smallclass.asp?b_id="&b_id&"';")
	response.Write("</script>")
end if
rs.close

%>