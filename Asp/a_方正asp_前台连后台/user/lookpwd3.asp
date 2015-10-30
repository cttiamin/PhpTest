<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="../include/conn.asp" -->
<%
dim id,rs,sqlstr
id=request.form("id")
answer=request.Form("answer")
if id="" then
  response.Redirect("login.asp")
else
  set rs=server.CreateObject("adodb.recordset")
  sqlstr="select * from [huiyuan] where id="&id
  rs.open sqlstr,conn,0,1
    if answer<>rs("answer") then
	  response.write("<script language=javascript>")
	  response.write("alert('您提交的安全问题答案不对，请重新输入');")
	  response.write("history.back(-1);")
	  response.write("</script>")
    else
	  pwd=rs("userpwd")
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
<table width="500" border="1" align="center">
  <tr>
    <td>你的密码是：<%=pwd%> <a href="login.asp">请返回登录页面</a> </td>
  </tr>
</table>
</body>
</html>
