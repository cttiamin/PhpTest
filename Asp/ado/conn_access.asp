<%
dim conn
db="datebase/student.mdb"'�����޸����ݿ�·��������
Set conn = Server.CreateObject("ADODB.Connection")
dbpath="Provider=Microsoft.Jet.OLEDB.4.0;Data Source=" & Server.MapPath(db)
conn.open dbpath
If Err Then
   err.Clear
   Set ConnItem = Nothing
   Response.Write "���ݿ����ӳ������������ִ���"
   Response.End
else
response.Write "sddd"
End If
%>
