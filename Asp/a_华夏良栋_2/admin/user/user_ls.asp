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
<title>�ޱ����ĵ�</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 12px}
-->
</style>
</head>

<body>
<table width="100%" border="1" cellpadding="5" cellspacing="0" bordercolor="#3366CC" bgcolor="#3399FF">
  <tr>
    <td align="center" valign="middle"><span class="STYLE1">�û���</span></td>
    <td align="center" valign="middle"><span class="STYLE1">����</span></td>
    <td align="center" valign="middle"><span class="STYLE1">�Ա�</span></td>
    <td align="center" valign="middle"><span class="STYLE1">mail</span></td>
    <td align="center" valign="middle"><span class="STYLE1">����</span></td>
    <td align="center" valign="middle"><span class="STYLE1">״̬</span></td>
    <td align="center" valign="middle"><span class="STYLE1">����</span></td>
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
		response.write("��ͨ��Ա")
	elseif rs("jibie")="2" then
		response.write("vip��Ա")
	elseif rs("jibie")="3" then
		response.write("��ʯ��Ա")
	else 
		response.write("δ֪")
	end if
	%>
    </span></td>
    <td bgcolor="#FFFFFF"><span class="STYLE1">
	<%
	if rs("is_shenhe")="0" then
	%>
	  <a href="user_sh.asp?id=<%=rs("id")%>&ls=0">δ��</a>
	<%else%>
	   <a href="user_sh.asp?id=<%=rs("id")%>&ls=1">����</a>
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
