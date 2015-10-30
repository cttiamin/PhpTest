<%
dim conn
db="datebase/student.mdb"'这里修改数据库路径或名称
Set conn = Server.CreateObject("ADODB.Connection")
dbpath="Provider=Microsoft.Jet.OLEDB.4.0;Data Source=" & Server.MapPath(db)
conn.open dbpath
'response.Write "和数据库已经连结成成"
%>
