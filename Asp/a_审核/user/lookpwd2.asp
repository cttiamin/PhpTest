<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="../include/conn.asp" -->
<%
dim id,rs,sqlstr
id=request.QueryString("id")
if id="" then
  response.Redirect("login.asp")
else
  set rs=server.CreateObject("adodb.recordset")
  sqlstr="select * from [huiyuan] where id="&id
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
<table width="500" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#999999">

  <form id="form1" name="form1" method="post" action="lookpwd3.asp">
    <tr>
      <td>找回密码第2步：</td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">你的安全问题是： <%=quest%>    </td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">你输入你的答案：        
      <input name="answer" type="text" id="answer" />
      <input name="id" type="hidden" id="id" value="<%=id%>" /></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><input type="submit" name="Submit" value="提交" /></td>
    </tr>
  </form>
</table>
</body>
</html>
