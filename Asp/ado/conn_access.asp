<%
dim conn
db="datebase/student.mdb"'这里修改数据库路径或名称
Set conn = Server.CreateObject("ADODB.Connection")
dbpath="Provider=Microsoft.Jet.OLEDB.4.0;Data Source=" & Server.MapPath(db)
conn.open dbpath
If Err Then
   err.Clear
   Set ConnItem = Nothing
   Response.Write "数据库连接出错，请检查连接字串。"
   Response.End
else
response.Write "sddd"
End If
%>
