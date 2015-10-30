<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp" -->
<%
dim rs,sqlstr,quest,id
	id=request.querystring("id")
if id="" then 
	response.redirect("lookpwd1.asp")
else
	set rs=server.CreateObject("adodb.recordset")
	sqlstr="select * from huiyuan where id="&id
	rs.open sqlstr,conn,0,1
	quest=rs("quest")
end if
%>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="lookpwd3.asp">
  <table width="414" height="146" border="1" align="center" bgcolor="#66FFFF">
    <tr>
      <td colspan="2">找回密码第二步:</td>
    </tr>
    <tr>
      <td align="right">你的问题是：</td>
      <td><%=quest%></td>
    </tr>
    <tr>
      <td align="right">请输入答案：</td>
      <td><input name="answer" type="text" id="answer" />
      <input name="id" type="hidden" id="id" value="<%=id%>" /></td>
    </tr>
    <tr>
      <td align="right"><input type="submit" name="Submit" value="提交" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>

</body>
</html>
