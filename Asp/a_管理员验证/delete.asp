<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp" -->
<%
dim del,sqlstr
 del=request.QueryString("id")
 if del<>"" then
 sqlstr="delete from article where id="&del
 conn.execute sqlstr
  response.write("<script language=javascript>")
  response.write("alert('É¾³ý³É¹¦');")
  response.write("location='select.asp';")
  response.write("</script>")
 else
   response.Redirect("select.asp")
 end if
%>
