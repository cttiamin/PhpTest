
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
<table width="553" border="1">
  <tr>
    <td width="138"><strong>编号</strong></td>
    <td colspan="2"><strong>姓名</strong></td>
  </tr>
<form id="form1" name="form1" method="post" action="del_set.asp">
  
  <%
dim sqlstr,rs
set rs=Server.CreateObject("adodb.recordset")
sqlstr="select * from students"
 'set rs=nothing
rs.open sqlstr,conn,3,3
while not rs.eof
%>
  <tr>
    <td><%=rs("ID")%></td>
    <td width="248"><%=rs("sname")%></td>
    <td width="145" nowrap="nowrap"><input type="checkbox" name="ID" value="<%=rs("ID")%>" />
      <a href="updt.asp?ID=<%=rs("ID")%>">修改</a></td>
  </tr>
  <%
 rs.movenext
 wend
 rs.close

 %>
 <tr>
 	<td height="41" colspan="3" align="center"><input type="Submit" name="del" value="删除选中的学生" 
	 onClick='return confirm("确定删除选中吗？请您慎重选择！这将删除您选中的所有内容。");'/>
	 &nbsp;<input type="submit" name="del" value="清空所有内容" onClick='return confirm("确定清空所有内容吗？请您慎重选择！这将删除所有内容信息。");'/></td>
 	</tr>	
 </form>
</table>


<br />


</body>
</html>
