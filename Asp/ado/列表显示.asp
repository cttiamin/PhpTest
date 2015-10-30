<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<table width="500" border="1" align="center">
  <tr>
    <td width="95" align="center">学生编号</td>
    <td width="262" align="center">姓名</td>
    <td width="121" align="center">年龄</td>
  </tr>
  <%
  dim conn
	set conn=server.CreateObject("adodb.connection")
	'set conn=nothing
	conn.open "Driver={sql server};uid=sa;pwd=sa;database=student;server=(local)"
	'response.Write "和数据库已经连结成成"
  dim rs
  set rs=server.CreateObject("adodb.recordset")
  rs.open "select top 5 ID,SName,Age from students order by Age asc",conn,1,1
   do while not rs.eof and not rs.bof
  %>
  <tr>
    <td><%=rs("ID")%></td>
    <td><a href="student_detail.asp?ID=<%=rs("ID")%>"><%=rs("SName")%></a></td>
    <td><%=rs("Age")%>&nbsp;&nbsp;&nbsp;<a href="student_del.asp?ID=<%=rs("ID")%>">删除</a></td>
  </tr>
  <%
   rs.movenext
   loop
   rs.close
  %>
  
</table>
</body>
</html>
