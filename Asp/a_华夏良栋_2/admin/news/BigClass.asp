<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
 set conn=server.CreateObject("adodb.connection")
  constr="Provider=Microsoft.Jet.oledb.4.0;data source="&server.MapPath("../../#asdsa%343/data.mdb")
  'response.write constr
  'response.end

  conn.open constr
%>


<%

dim rs,b_title,b_order,b_content,sqlstr
 b_title=request.Form("b_title")
 b_content=request.Form("b_content")
 b_order=int(request.Form("b_order"))
 if b_title<>"" then
    sqlstr="insert into BigClass(b_title,b_content,B_order)values('"&b_title&"','"&b_content&"',"&b_order&")"
    conn.execute sqlstr
 
 end if
 set rs=server.CreateObject("adodb.recordset")
 
 
%>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 12px}
-->
</style>
</head>

<body>
<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#33CCFF">
  <tr>
    <td width="12%" align="center"><span class="STYLE1">排序</span></td>
    <td width="55%" align="center"><span class="STYLE1">大类名称</span></td>
    <td width="12%" align="center"><span class="STYLE1">下级菜单</span></td>
    <td width="21%" align="center"><span class="STYLE1">操作</span></td>
  </tr>
  <%
  sqlstr="select * from Bigclass order by B_order,B_id desc"
  rs.open sqlstr,conn,0,1
  do while not rs.eof
  %>
  <tr>
    <td align="center" bgcolor="#FFFFFF"><span class="STYLE1"><%=rs("B_order")%></span></td>
    <td align="center" bgcolor="#FFFFFF"><span class="STYLE1"><%=rs("B_title")%></span></td>
    <td align="center" bgcolor="#FFFFFF"><span class="STYLE1"><a href="SmallClass.asp?b_id=<%=rs("b_id")%>">小类管理</a></span></td>
    <td align="center" bgcolor="#FFFFFF"><span class="STYLE1">修改 | <a href="bigclass_del.asp?b_id=<%=rs("b_id")%>">删除</a></span></td>
  </tr>
  <%
  rs.movenext
  loop
  rs.close
  %>
</table>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="">
  <table width="500" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td width="16%" align="right" nowrap="nowrap" bgcolor="#66CCFF">大类名称:</td>
      <td width="36%"><input name="b_title" type="text" id="b_title" size="40" /></td>
    </tr>
    <tr>
      <td align="right" nowrap="nowrap" bgcolor="#66CCFF">类别介绍：</td>
      <td><textarea name="b_content" cols="40" rows="8" id="b_content"></textarea></td>
    </tr>
    <tr>
      <td align="right" nowrap="nowrap" bgcolor="#66CCFF">排序：</td>
      <td><input name="B_order" type="text" id="B_order" /></td>
    </tr>
    <tr>
      <td align="right" nowrap="nowrap" bgcolor="#66CCFF">&nbsp;</td>
      <td><input type="submit" name="Submit" value="提交" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
