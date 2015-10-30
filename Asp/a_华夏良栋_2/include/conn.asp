<%
dim conn,constr
  set conn=server.CreateObject("adodb.connection")
  constr="Provider=Microsoft.Jet.oledb.4.0;data source="&server.MapPath("#asdsa%343/data.mdb")
'response.write constr
'response.end
   conn.open constr
%>