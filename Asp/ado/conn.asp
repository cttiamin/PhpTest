<%
dim conn
db="datebase/student.mdb"'�����޸����ݿ�·��������
Set conn = Server.CreateObject("ADODB.Connection")
dbpath="Provider=Microsoft.Jet.OLEDB.4.0;Data Source=" & Server.MapPath(db)
conn.open dbpath
'response.Write "�����ݿ��Ѿ�����ɳ�"
%>
