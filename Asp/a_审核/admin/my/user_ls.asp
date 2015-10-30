<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="../../include/adminconn.asp" -->

<%
dim rs ,sqlstr
set rs=server.CreateObject("adodb.recordset")
%>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<table width="946" height="89" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#0000FF">
  <tr>
    <td width="88" height="44" align="center">用户名</td>
    <td width="60" align="center">密码</td>
    <td width="28" align="center">年龄</td>
    <td width="88" align="center">问题</td>
    <td width="84" align="center">答案</td>
    <td width="62" align="center">time</td>
    
    <td width="56" align="center">姓名</td>
    <td width="30" align="center">性别</td>
    <td width="92" align="center">mail</td>
    <td width="118" align="center">级别</td>
    <td width="44" align="center">状态</td>
    <td width="170" align="center">操作</td>
  </tr>
  <%
  sqlstr="select * from [huiyuan] order by id desc"
  rs.open sqlstr,conn,0,1
  do while not rs.eof
  %>
  <tr>
    <td align="center"><%=rs("username")%></td>
    <td align="center"><%=rs("userpwd")%></td>
    <td align="center"><%=rs("age")%></td>
    <td align="center"><%=rs("quest")%></td>
    <td align="center"><%=rs("answer")%></td>
    <td align="center"><%=rs("regtime")%></td>
    
    <td align="center"><%=rs("fname")%></td>
    <td align="center"><%=rs("ssex")%></td>
    <td align="center"><%=rs("mail")%></td>
    <td align="center"><%
	if rs("jibie")="1" then
		response.write("普通会员")
	elseif rs("jibie")="2" then
		response.write("vip会员")
	elseif rs("jibie")="3" then
		response.write("钻石会员")
	else 
		response.write("未知")
	end if
	%></td>
    <td align="center"><%
	if rs("is_shenhe")="0" then
	%>
	  <a href="user_sh.asp?id=<%=rs("id")%>&ls=0">未审</a>
	<%else%>
	   <a href="user_sh.asp?id=<%=rs("id")%>&ls=1">已审</a>
	<%
	end if
	%></td>
    <td align="center"><a href="update.asp?id=<%=rs("id")%>">修改</a> | <a href="delete.asp?id=<%=rs("id")%>">册除</a> |  <a href="insert.asp">添加</a></td>
  </tr>
  <%
  rs.movenext
  loop
  rs.close
  %>
</table>
</body>
</html>
