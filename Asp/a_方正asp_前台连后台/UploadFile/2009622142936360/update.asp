<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp" -->
<%
dim id,title,content,flag,sqlstr,rs
 id=request.QueryString("id")
 set rs=server.CreateObject("adodb.recordset")
 sqlstr="select * from article where id="&id
 rs.open sqlstr,conn,0,1
  title=rs("title")
  content=rs("content")
  flag=rs("flag")
 rs.close
 
%>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="update_save.asp">
  <table width="600" height="136" border="0" align="center" cellpadding="5" cellspacing="1">
    <tr>
      <td width="130" bgcolor="#3399CC">请输入标题：</td>
      <td width="354"><input name="title" type="text" id="title" value="<%=title%>" size="50" />
      <input name="id" type="hidden" value="<%=id%>" /></td>
    </tr>
    <tr>
      <td height="41" bgcolor="#3399CC">文章推荐：</td>
      <td><input name="flag" type="radio" value="1" <%if flag=1 then response.write(" checked='checked'")%>
	 />
        普通 
          <input type="radio" name="flag" value="2" <%if flag=2 then response.write(" checked='checked'")%> />
推荐 
<input type="radio" name="flag" value="3" <%if flag=3 then response.write(" checked='checked'")%> />
重点推荐</td>
    </tr>
    <tr>
      <td bgcolor="#3399CC">文章内容：</td>
      <td><textarea name="content" cols="50" rows="20" id="content"><%=content%></textarea></td>
    </tr>
    <tr>
      <td bgcolor="#3399CC">&nbsp;</td>
      <td><input type="submit" name="Submit" value="提交" /></td>
    </tr>
  </table>
</form>
</body>
</html>

</html>
