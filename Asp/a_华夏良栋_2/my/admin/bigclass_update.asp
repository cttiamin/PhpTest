<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="../include/admincoon.asp" -->

<%
dim rs,sqlstr,b_title,b_content,b_order,a_title,a_content,a_order
set rs=server.CreateObject("adodb.recordset")
	b_id=request.QueryString("b_id")
   if b_id="" then
   response.Redirect("bigclass.asp")
   end if
sqlstr="select * from bigclass where b_id="&b_id
rs.open sqlstr,conn,0,1

a_title=rs("b_title")
a_content=rs("b_content")
a_order=rs("b_order")
b_title=request.form("b_title")
b_content=request.form("b_content")	
b_order=request.form("b_order")
if b_title<>"" then
	conn.execute "update bigclass set b_title='"&b_title&"',b_content='"&b_content&"',b_order="&b_order&" where b_id="&b_id
	
 response.write("<script language=javascript>")
  response.write("alert('文章修改成功');")
  response.write("location='bigclass.asp';")
  response.write("</script>")
  end if
  
	
rs.close

%>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<table width="500" border="0" align="center" cellpadding="5" 

cellspacing="0">
  <form id="form1" name="form1" method="post" action="">
    <tr>
      <td width="16%" align="right" nowrap="nowrap" bgcolor="#66CCFF"> 大类名称:</td>
      <td width="36%"><input name="b_title" type="text" id="b_title" value="<%=a_title%>" 

size="40" /></td>
    </tr>
    <tr>
      <td align="right" nowrap="nowrap" bgcolor="#66CCFF">类别介绍：</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="right" nowrap="nowrap" bgcolor="#66CCFF">排序：</td>
      <td><textarea name="b_content" cols="40" rows="8" 

id="b_content"><%=a_content%></textarea>
      <input name="B_order" type="text" id="B_order" value="<%=a_order%>" /></td>
    </tr>
    <tr>
      <td align="right" nowrap="nowrap" bgcolor="#66CCFF">&nbsp;</td>
      <td><input type="submit" name="Submit" value="提交" /></td>
    </tr>
  </form>
</table>
</body>
</html>
