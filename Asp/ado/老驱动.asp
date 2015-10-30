<%
dim conn,sqlstr
set conn=server.CreateObject("adodb.connection")
sqlstr="Driver={Microsoft Access Driver (*.mdb)};DBQ="&Server.MapPath("database/aaaa.mdb")
conn.open sqlstr
response.Write("数据库连接成功")
%>