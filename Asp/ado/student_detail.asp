<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<%
dim conn,id,sqlstr
set conn=server.CreateObject("adodb.connection")
conn.open "Driver={sql server};uid=sa;pwd=sa;database=student;server=(local)"
'response.Write "和数据库已经连结成成"
id=request.QueryString("ID")
if id="" then
response.write "输入错误"
else
'response.Write id

set rs=server.CreateObject("adodb.recordset")
sqlstr="select * from students where ID="& id
rs.open sqlstr,conn,1,1

%>


<table width="500" border="1" align="center">
  <tr>
    <td width="125">姓名：</td>
    <td width="359"><%=rs("SName")%></td>
  </tr>
  <tr>
    <td>年龄：</td>
    <td><%=rs("Age")%></td>
  </tr>
  <tr>
    <td>性别：</td>
    <td>
	<%
	if rs("Sex")=1 then
	    response.write"男"
	else
	    response.write"女"
	end if
	%></td>
  </tr>
  <tr>
    <td>所学课程:</td>
    <td><%=rs("Course")%></td>
  </tr>
  <tr>
    <td>个人简历</td>
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
