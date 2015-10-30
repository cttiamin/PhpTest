<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
set conn=server.CreateObject("adodb.connection")
  constr="Provider=Microsoft.Jet.oledb.4.0;data source="&server.MapPath("../../#asdsa%343/data.mdb")
 conn.open constr
%>



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
<table width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="#3366CC" bgcolor="#3399FF">
  <tr>
    <td align="center" valign="middle"><span class="STYLE1">用户名</span></td>
    <td align="center" valign="middle"><span class="STYLE1">姓名</span></td>
    <td align="center" valign="middle"><span class="STYLE1">性别</span></td>
    <td align="center" valign="middle"><span class="STYLE1">mail</span></td>
    <td align="center" valign="middle"><span class="STYLE1">极别</span></td>
    <td align="center" valign="middle"><span class="STYLE1">状态</span></td>
    <td align="center" valign="middle"><span class="STYLE1">操作</span></td>
  </tr>
  <%
  sqlstr="select * from [huiyuan] order by id desc"
  rs.open sqlstr,conn,0,1
  do while not rs.eof
  %>
  <tr>
    <td bgcolor="#FFFFFF"><span class="STYLE1"><%=rs("username")%></span></td>
    <td bgcolor="#FFFFFF"><span class="STYLE1"><%=rs("fname")%></span></td>
    <td bgcolor="#FFFFFF"><span class="STYLE1"><%=rs("ssex")%></span></td>
    <td bgcolor="#FFFFFF"><span class="STYLE1"><%=rs("mail")%></span></td>
    <td bgcolor="#FFFFFF">
	  <span class="STYLE1">
	  <%
	if rs("jibie")="1" then
		response.write("普通会员")
	elseif rs("jibie")="2" then
		response.write("vip会员")
	elseif rs("jibie")="3" then
		response.write("钻石会员")
	else 
		response.write("未知")
	end if
	%>
    </span></td>
    <td bgcolor="#FFFFFF"><span class="STYLE1">
	<%
	if rs("is_shenhe")="0" then
	%>
	  <a href="user_sh.asp?id=<%=rs("id")%>&ls=0">未审</a>
	<%else%>
	   <a href="user_sh.asp?id=<%=rs("id")%>&ls=1">已审</a>
	<%
	end if
	%></span></td>
    <td bgcolor="#FFFFFF"><span class="STYLE1"></span></td>
  </tr>
  <%
  rs.movenext
  loop
  rs.close
  %>
</table>
</body>
</html>
