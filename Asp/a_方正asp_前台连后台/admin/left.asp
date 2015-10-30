<!--#include file="../include/conn.asp" -->
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
}
-->
</style></head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td colspan="2">会员管理</td>
  </tr>
  <tr>
    <td width="28%">&nbsp;</td>
    <td width="72%"><a href="user/user_ls.asp" target="mainFrame">会员管理</a></td>
  </tr>
  <tr>
    <td colspan="2">新闻文章管理</td>
  </tr>
  <tr>
    <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	<%
	sqlstr="select * from bigclass order by b_order asc"
	rs.open sqlstr,conn,0,1
	do while not rs.eof
	%>
	
      <tr>
        <td colspan="2" bgcolor="#66CCFF"><a href="news/SmallClass.asp?b_id=<%=rs("b_id")%>" target="mainFrame"><%=rs("b_title")%></a></td>
        </tr>
	  <%
	  sqlstr2="select * from smallclass where b_id="&rs("b_id")
	  rs2.open sqlstr2,conn,0,1
	  do while not rs2.eof
	  %>
      <tr>
        <td width="16%" align="right">· </td>
        <td width="84%"><a href="news/Article.asp?s_id=<%=rs2("s_id")%>" target="mainFrame"><%=rs2("s_title")%></a> </td>
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
	  
    </table></td>
  </tr>
  <tr>
    <td colspan="2"><a href="news/BigClass.asp" target="mainFrame">新闻栏目管理</a></td>
  </tr>
</table>
</body>

</html>
