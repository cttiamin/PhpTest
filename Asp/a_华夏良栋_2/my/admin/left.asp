<!--#include file="../include/admincoon.asp" -->
<%
dim rs,rs2,sqlstr,sqlstr2
	set rs=server.CreateObject("adodb.recordset")
	set rs2=server.CreateObject("adodb.recordset")
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
<!--
body {
	background-color: #66FFFF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-family: 宋体;
	font-size: 14px;
}
.STYLE1 {font-size: 16px}
-->
</style></head>

<body>
<table width="90%" height="150" border="0" align="center">
  <tr>
    <td><a href="bigclass.asp" target="mainFrame" class="STYLE1">栏目管理</a></td>
  </tr>
  <%
	sqlstr="select * from bigclass order by b_order asc"
	rs.open sqlstr,conn,0,1
	do while not rs.eof
	%>
  <tr>
    <td align="center"><a href="SmallClass.asp?b_id=<%=rs("b_id")%>" target="mainFrame"><%=rs("b_title")%></a></td>
  </tr>
  <%
  sqlstr2="select * from smallclass where b_id="&rs("b_id")
  rs2.open sqlstr2,conn,0,1
  do while not rs2.eof
  %>
 
  <tr>
    <td align="right"></td>
  </tr>
  <%
  rs2.movenext
  loop
  rs2.close
  %>
  <%
  rs.movenext
  loop
  rs.close
  %>
  <tr>
    <td>会员管理</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
