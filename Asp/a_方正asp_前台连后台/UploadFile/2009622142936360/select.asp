<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp" -->
<%
dim rs,sqlstr
  set rs=server.CreateObject("adodb.recordset")
%>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 12px}
-->
</style>
</head>

<body>
<table width="592" border="0" align="center" cellpadding="5" cellspacing="1">
  <tr>
    <td width="281" align="center" bgcolor="#3399FF"><span class="STYLE1">文章标题</span></td>
    <td width="112" align="center" bgcolor="#3399FF"><span class="STYLE1">发布时间</span></td>
    <td width="83" align="center" bgcolor="#3399FF"><span class="STYLE1">推荐形式</span></td>
    <td width="71" align="center" bgcolor="#3399FF"><span class="STYLE1">操作 <a href="insert.asp">添加 </a></span></td>
  </tr>
  <%
  sqlstr="select id,title,flag,createtime from article order by flag desc,createtime desc"
  rs.open sqlstr,conn,0,1
  do while not rs.eof
  %>
  <tr>
    <td><span class="STYLE1"><%=rs("title")%></span></td>
    <td><span class="STYLE1"><%=datevalue(rs("createtime"))%></span></td>
    <td><span class="STYLE1">
	<%
	if rs("flag")=1 then 
	response.write("普通文章")
	elseif rs("flag")=2 then
	response.write("<font color=#0000ff>推荐</font>")
	else
	response.write("<font color=#ff0000>重点推荐</font>")
    end if
	%></span></td>
    <td><span class="STYLE1"><a href="update.asp?id=<%=rs("id")%>">修改</a>| <a href="delete.asp?id=<%=rs("id")%>">删除</a> </span></td>
  </tr>
  <%
  rs.movenext
  loop
  rs.close
  %>
</table>
</body>
</html>
