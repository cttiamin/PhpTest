<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
set conn=server.CreateObject("adodb.connection")
  constr="Provider=Microsoft.Jet.oledb.4.0;data source="&server.MapPath("../../#asdsa%343/data.mdb")
 conn.open constr
%><%
dim s_id,id,i,del
del=request.form("del")
	s_id=request.QueryString("s_id")

if del="ɾ��" then
	for i = 1 to request.form("id").count
	 sqlstr="delete from article where id="&request.form("id")(i)
	  conn.execute sqlstr
	
	next
	response.Write("<script language=javascript>")
	response.Write("alert('ɾ���ɹ�');")
	response.Write("location='article.asp?s_id="&s_id&"';")
	response.Write("</script>")
	response.Write(id)
end if

if del="ɾ������" then
	 sqlstr="delete from article where s_id="&s_id
	  conn.execute sqlstr
	response.Write("<script language=javascript>")
	response.Write("alert('ɾ���ɹ�');")
	response.Write("location='article.asp?s_id="&s_id&"';")
	response.Write("</script>")
	response.Write(id)
end if

if del="��Ϊ�Ƽ�" then
	for i = 1 to request.form("id").count
	 sqlstr="update article set flag=1 where id="&request.form("id")(i)
	  conn.execute sqlstr
	
	next
	response.Write("<script language=javascript>")
	response.Write("alert('�ɹ�');")
	response.Write("location='article.asp?s_id="&s_id&"';")
	response.Write("</script>")
	response.Write(id)
end if

%>
