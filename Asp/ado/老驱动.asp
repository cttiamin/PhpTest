<%
dim conn,sqlstr
set conn=server.CreateObject("adodb.connection")
sqlstr="Driver={Microsoft Access Driver (*.mdb)};DBQ="&Server.MapPath("database/aaaa.mdb")
conn.open sqlstr
response.Write("���ݿ����ӳɹ�")
%>