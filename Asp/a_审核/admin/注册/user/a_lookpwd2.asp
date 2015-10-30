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
<form id="form1" name="form1" method="post" action="">
  <table width="370" border="1" align="center">
    <tr>
      <td>第二步：</td>
    </tr>
    <tr>
      <td>你的问题是：<%=quest%></td>
    </tr>
    <tr>
      <td>请输入答案：
      <input type="text" name="textfield" />
      <input type="submit" name="Submit" value="提交" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
