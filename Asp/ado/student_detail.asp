<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<%
dim conn,id,sqlstr
set conn=server.CreateObject("adodb.connection")
conn.open "Driver={sql server};uid=sa;pwd=sa;database=student;server=(local)"
'response.Write "�����ݿ��Ѿ�����ɳ�"
id=request.QueryString("ID")
if id="" then
response.write "�������"
else
'response.Write id

set rs=server.CreateObject("adodb.recordset")
sqlstr="select * from students where ID="& id
rs.open sqlstr,conn,1,1

%>


<table width="500" border="1" align="center">
  <tr>
    <td width="125">������</td>
    <td width="359"><%=rs("SName")%></td>
  </tr>
  <tr>
    <td>���䣺</td>
    <td><%=rs("Age")%></td>
  </tr>
  <tr>
    <td>�Ա�</td>
    <td>
	<%
	if rs("Sex")=1 then
	    response.write"��"
	else
	    response.write"Ů"
	end if
	%></td>
  </tr>
  <tr>
    <td>��ѧ�γ�:</td>
    <td><%=rs("Course")%></td>
  </tr>
  <tr>
    <td>���˼���</td>
    <td><%=rs("Intro")%></td>
  </tr>
</table>
<%
rs.close
set rs=nothing
end if
conn.close
set conn=nothing

%>
</body>
</html>
