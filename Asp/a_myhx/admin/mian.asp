<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<%
Response.Buffer = true
'���û���
Response.Expires = -10000
Response.AddHeader "pragma", "no-cache"
Response.AddHeader "cache-control", "private"
Response.CacheControl = "no-cache"
%>

<!--#include file="conn.asp" -->


<%

set rs = Server.CreateObject("ADODB.Recordset")

username = Session("username")
sql = "select * from adminuser where username='" & username & "'"
rs.Open sql, conn, 0, 1, 1

if not rs.EOF then
	realname = rs("realname")
	logincount = rs("logincount")
	logindate = rs("logindate")
elseif Session("username") = "jm_zhang" then
	realname = "jm_zhang"
else
	Response.Redirect "warn.asp"
	Response.end
end if

rs.Close
set rs = nothing
conn.Close
set conn = nothing
%>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
<style>
<!--
body,table,tr
{
	background-color: #33FFFF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	font-size:12px;
	font-family:����;
	line-height:20px;
}
body {
	background-color: #33FFFF;
}
-->
</style>

</head>

<body>
<table width="781" height="137" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="33" colspan="3">�����ڵ�λ�ã�<b><%=Request.ServerVariables("HTTP_HOST")%> -&gt; ��������</b></td>
  </tr>
  <tr>
    <td width="15%">&nbsp;</td>
    <td width="12%">&nbsp;</td>
    <td width="73%"><table width="550" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><%=Now()%></td>
      </tr>
      <tr>
        <td><%=realname%></td>
      </tr>
      <tr>
        <td>��ӭ����<span style="font-weight:bold;color:#00008B;padding:5px;"><%=Request.ServerVariables("HTTP_HOST")%></span>��������</td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="781" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#33FFFF">
  <tr>
    <td colspan="2" align="center">����ص���Ϣ</td>
  </tr>
  <tr>
    <td width="14%" align="right">�û�����</td>
    <td width="86%"><%=username%></td>
  </tr>
  <tr>
    <td align="right">��ǰIP��</td>
    <td><%=Request.ServerVariables("REMOTE_ADDR")%></td>
  </tr>
  <tr>
    <td align="right">���ߴ�����</td>
    <td><%=logincount%></td>
  </tr>
  <tr>
    <td align="right">����ʱ�䣺</td>
    <td><%=logindate%></td>
  </tr>
  <tr>
    <td align="right">��ַ��</td>
    <td><%=Request.ServerVariables("HTTP_HOST")%></td>
  </tr>
  <tr>
    <td align="right">������汾��</td>
    <td><%=Request.ServerVariables("HTTP_USER_AGENT")%></td>
  </tr>
  <tr>
    <td align="right">web��������</td>
    <td><%=Request.ServerVariables("SERVER_SOFTWARE")%></td>
  </tr>
  <tr>
    <td align="right">��ݹ��ڣ�</td>
    <td><%=Session.timeout%> ����</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
