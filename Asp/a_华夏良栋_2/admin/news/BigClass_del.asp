<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
set conn=server.CreateObject("adodb.connection")
  constr="Provider=Microsoft.Jet.oledb.4.0;data source="&server.MapPath("../../#asdsa%343/data.mdb")
 conn.open constr
%>


<%
set rs=server.CreateObject("adodb.recordset")
b_id=request.QueryString("b_id")
sqlstr="select * from smallclass where b_id="&b_id
rs.open sqlstr,conn,0,1
if rs.eof then
   conn.execute "delete from bigclass where b_id="&b_id
	response.Write("<script language=javascript>")
	response.Write("alert('ɾ���ɹ�');")
	response.Write("location='bigclass.asp';")
	response.Write("</script>")
else
  
	response.Write("<script language=javascript>")
	response.Write("alert('������»���С�࣬��ɾ���������������ݺ���ִ�д˲���');")
	response.Write("location='bigclass.asp';")
	response.Write("</script>")
end if

%>

