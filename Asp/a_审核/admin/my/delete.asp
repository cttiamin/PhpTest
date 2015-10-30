<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp" -->
<%
dim del,sqlstr
	del=request.QueryString("id")
	if del<>"" then
	sqlstr="delete from huiyuan where id="&del
	conn.execute sqlstr
	response.write("<script lange=javascript>")
	response.write("alert('²á³ý³É¹¦');")
	response.write("loaction='user_ls.asp';")
	response.write("</script>")
else
	response.redirect("user_ls.asp")
end if

%>
