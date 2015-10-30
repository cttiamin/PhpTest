
<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
set conn=server.CreateObject("adodb.connection")
'set conn=nothing
conn.open "Driver={sql server};uid=sa;pwd=sa;database=student;server=(local)"
'response.Write "和数据库已经连结成成"
%>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="student.asp">
  <table width="500" border="1" align="center">
    <tr>
      <td align="center">请输入关键字:
        <input type="text" name="textfield" />
      <input type="submit" name="Submit" value="开始搜索" /></td>
    </tr>
  </table>
</form>
<br />
<table width="500" border="1" align="center">
  <tr>
    <td width="77"><strong>编号</strong></td>
    <td width="383" colspan="2"><strong>姓名</strong></td>
  </tr>
  
  <%
dim sqlstr,rs
set rs=Server.CreateObject("adodb.recordset")
sqlstr="select * from students order by id asc"
 'set rs=nothing
rs.open sqlstr,conn,1,1
  'rs.pagesize=1
   'pagecounts=rs.pagecount
   'recordcounts=rs.recordcount
   'response.write recordcounts
while not rs.eof and not rs.bof
%>
  <tr>
    <td><%=rs("ID")%></td>
    <td><%=rs("sname")%></td>
    <td>&nbsp;</td>
  </tr>
  <%
 rs.movenext
 wend
 rs.close

 %>
</table>

<br />


</body>
</html>
