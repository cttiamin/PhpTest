<%
set conn=server.CreateObject("adodb.connection")
  constr="Provider=Microsoft.Jet.oledb.4.0;data source="&server.MapPath("db/data.mdb")
  'response.write constr
  'response.end
 conn.open constr
%>