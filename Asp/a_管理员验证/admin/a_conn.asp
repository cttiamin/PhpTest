<%
dim conn,connstr
	set conn=server.createobject("adodb.connection")
	connstr="Provider=Microsoft.Jet.oledb.4.0;data source="&server.MapPath("../#asdsa%343/data.mdb")
	'response.write("���ӳɹ�")
	conn.open connstr
%>
