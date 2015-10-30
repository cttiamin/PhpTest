<%
dim conn,connstr
   set conn=server.CreateObject("adodb.connection")
   connstr="provider=Microsoft.jet.oledb.4.0;data source="&server.MapPath("#asdsa%343/data.mdb")
   conn.open connstr

%>
