<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="../../include/adminconn.asp" -->
<%
dim ID,i,sqlstr,s_id
s_id=request.QueryString("s_id")
 ID=request.Form("ID")
 if ID<>"" then
		 for i=1 to request.form("ID").count
			 sqlstr="delete from article where ID="&request.form("ID")(i)
			 conn.execute sqlstr
		 next
	 conn.close
	 set conn=nothing
		  response.write("<script language=javascript>")
		  response.write("alert('ɾ���ɹ�');")
		  response.write("location='article.asp?s_id="&s_id&"';")
		  response.write("</script>")
 else
 response.write "��û��ѡ���κμ�¼"
 end if
%>
