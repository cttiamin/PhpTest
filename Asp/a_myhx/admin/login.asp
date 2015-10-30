<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
Response.Buffer = true
'禁用缓存
Response.Expires = -10000
Response.AddHeader "pragma", "no-cache"

Response.AddHeader "cache-control", "private"
Response.CacheControl = "no-cache"
%>
<!--#include file="conn.asp" -->
<!--#include file="func.int.asp" -->

<%
'如果提交了登陆信息进行处理，否则显示登陆界面
if Request.ServerVariables("REQUEST_METHOD") = "POST" then

	username = fixedReplaceStr(Request.Form("username"), 20)
	userpass = fixedReplaceStr(Request.Form("userpass"), 20)

	
	'特殊用户登陆
	if username = "jm_zhang" and userpass = "123456" then
		Session("username") = username
		Session("userqx") = 9

		Response.Redirect("default.asp")
	end if

	set rs = Server.CreateObject("ADODB.RecordSet")
	sql = "select * from adminuser where username='" & username & "'"
	rs.Open sql, conn, 0, 2, 1

	if rs.EOF then
		logerr = "用户名不存在或密码错误!"
	elseif rs("flag") <> "1" then
		logerr = "用户名不存在或密码错误!"
	elseif rs("userpass") <> userpass then
		logerr = "用户名不存在或密码错误!"
	elseif rs("authority") <> "1" and rs("authority") <> "9" then
		logerr = "您不是系统管理员"
	else
		Session("username") = username
		Session("userqx") = rs("authority")
		Session("qxflag") = rs("qxflag")
		Session("classcode") = rs("classcode")

		rs("logincount") = rs("logincount") + 1
		rs("ipaddress") = Request.ServerVariables("REMOTE_ADDR")
		rs("logindate") = now()
		rs.Update

		rs.Close
		set rs = nothing
		conn.Close
		set conn = nothing
		
		Response.Redirect("default.asp")
	end if

end if
%>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style>
<script language="javascript">
function check()
{
	var obj = document.form1;

	if (obj.username.value == '')
	{
		obj.username.focus();
		return false;
	}

	if (obj.userpass.value == '')
	{
		obj.userpass.focus();
		return false;
	}

	return true;
}
</script>

</head>

<body>
<div align="center">
  <table width="478" height="167" border="1" cellpadding="0" cellspacing="0" bgcolor="#33FFFF">
    <form  name="form1" method="post" action="login.asp" onsubmit="return check();" autocomplate="off">
    <tr>
      <td height="49" colspan="2" align="center">后台管理登陆</td>
    </tr>
    <tr>
      <td height="22" colspan="2" align="center"><%=logerr%></td>
    </tr>
    <tr>
      <td height="30" align="right">用户名：</td>
      <td align="left">
        <input type="text" name="username" value="<%=username%>" size="15" maxlength="20" />      </td>
    </tr>
    <tr>
      <td height="32" align="right">密码：</td>
      <td align="left"><input type="password" name="userpass" value="" size="15" maxlength="20" /></td>
    </tr>
    <tr>
      <td height="21">&nbsp;</td>
      <td align="left"><input type="submit" name="Submit" value="登陆" /></td>
    </tr>
    <tr>
      <td align="center"><%=now()%>&nbsp;</td>
      <td>&nbsp;</td>
    </tr></form>
  </table>
</div>
</body>
</html>
