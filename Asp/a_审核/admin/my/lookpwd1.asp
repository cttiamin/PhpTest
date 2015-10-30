<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp" -->
<%
dim rs,sqlstr,username
	username=request.form("username")
	set rs=server.createobject("adodb.recordset")
 if username<>"" then
	sqlstr="select * from huiyuan where username='"&username&"'"
	rs.open sqlstr,conn,0,1
	if rs.eof then
	response.write("<script language=javascript>")
	response.write("alert('请输入正确的用户名');")
	response.write("</script>")
	else 
	response.redirect("lookpwd2.asp?id="&rs("id"))
	end if
end if
%>	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="500" height="76" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#66FFCC">
    <tr>
      <td width="490">找回密码第一步:</td>
    </tr>
    <tr>
      <td>请输入你的用户名：
      <input name="username" type="text" id="username" />
      <input type="submit" name="Submit" value="提交" /></td>
    </tr>
  </table>
</form>
</body>
</html>
