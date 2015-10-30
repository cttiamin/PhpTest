<%
dim conn,constr
	set conn=server.CreateObject("adodb.connection")
		constr="Provider=Microsoft.jet.oledb.4.0;data source="&server.MapPath("../db/hxld.mdb")
		conn.open constr
%>