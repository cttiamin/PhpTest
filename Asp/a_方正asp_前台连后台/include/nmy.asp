<%
dim conn,constr
  set conn=server.CreateObject("adodb.connection")
  constr="Provider=Microsoft.Jet.oledb.4.0;data source="&server.MapPath("../../#mdb/date.mdb")
  conn.open constr
%>