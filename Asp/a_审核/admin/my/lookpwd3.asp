<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp" -->
<%
dim rs,sqlstr,answer,id,pwd
	answer=request.form("answer")
	id=request.form("id")
	
if id="" then
	response.redirect("lookpwd2.asp")
else
	set rs=server.createobject("adodb.recordset")
	sqlstr="select * from huiyuan where id="&id
	rs.open sqlstr,conn,0,1
	if answer<>rs("answer") then
	response.write("<script language=javascript>")
	response.write("alert('请输入正确的答案');")
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
<form id="form1" name="form1" method="post" action="">
  <table width="470" height="41" border="1" align="center" bgcolor="#66FFFF">
    <tr>
      <td>你的密码是：<%=pwd%> &nbsp;&nbsp;&nbsp;<a href="userlogin.asp">返回登陆</a></td>
    </tr>
  </table>
</form>
</body>
</html>
