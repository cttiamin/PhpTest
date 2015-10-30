<%
dim conn,connstr
    set conn=server.CreateObject("adodb.connection")
	connstr="Provider=Microsoft.Jet.oledb.4.0;data source="&server.MapPath("../../#asdsa%343/data.mdb")
	'response.write("asdadsf")
	conn.open connstr
%>