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
<title>�ޱ����ĵ�</title>
</head>

<body>
<table width="946" height="89" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#0000FF">
  <tr>
    <td width="88" height="44" align="center">�û���</td>
    <td width="60" align="center">����</td>
    <td width="28" align="center">����</td>
    <td width="88" align="center">����</td>
    <td width="84" align="center">��</td>
    <td width="62" align="center">time</td>
    
    <td width="56" align="center">����</td>
    <td width="30" align="center">�Ա�</td>
    <td width="92" align="center">mail</td>
    <td width="118" align="center">����</td>
    <td width="44" align="center">״̬</td>
    <td width="170" align="center">����</td>
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
		response.write("��ͨ��Ա")
	elseif rs("jibie")="2" then
		response.write("vip��Ա")
	elseif rs("jibie")="3" then
		response.write("��ʯ��Ա")
	else 
		response.write("δ֪")
	end if
	%></td>
    <td align="center"><%
	if rs("is_shenhe")="0" then
	%>
	  <a href="user_sh.asp?id=<%=rs("id")%>&ls=0">δ��</a>
	<%else%>
	   <a href="user_sh.asp?id=<%=rs("id")%>&ls=1">����</a>
	<%
	end if
	%></td>
    <td align="center"><a href="update.asp?id=<%=rs("id")%>">�޸�</a> | <a href="delete.asp?id=<%=rs("id")%>">���</a> |  <a href="insert.asp">���</a></td>
  </tr>
  <%
  rs.movenext
  loop
  rs.close
  %>
</table>
</body>
</html>
