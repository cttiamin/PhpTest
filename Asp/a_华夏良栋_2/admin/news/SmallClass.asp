<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
set conn=server.CreateObject("adodb.connection")
  constr="Provider=Microsoft.Jet.oledb.4.0;data source="&server.MapPath("../../#asdsa%343/data.mdb")
 conn.open constr
%>

<%
dim rs,sqlstr,b_id
  set rs=server.CreateObject("adodb.recordset")
  b_id=request.QueryString("b_id")
  if b_id="" then
    response.Redirect("Bigclass.asp")
   end if
     sqlstr="select max(s_order) from smallclass where B_id="&b_id
      rs.open sqlstr,conn,0,1
		if rs.eof then
		  s_order=0
	    else
		   s_order=rs(0)+1
		 end if
	rs.close
 
 dim s_title,s_content,s_order
   s_title=request.Form("s_title")
   
   s_content=request.form("s_content")
   a_order=int(request.Form("s_order"))
   if s_title<>"" then
      sqlstr="insert into smallclass(B_id,s_title,s_content,s_order)values("&b_id&",'"&s_title&"','"&s_content&"',"&a_order&")"
	  conn.execute sqlstr
	  response.Redirect("smallclass.asp?b_id="&b_id)
  end if

%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
.STYLE1 {color: #FFFFFF}
-->
</style></head>

<body>
<p>
  <%
sqlstr="select * from BigClass where B_id="&b_id
rs.open sqlstr,conn,0,1
response.write(rs("B_title"))
rs.close
%>
类别下的小类管理(<a href="BigClass.asp">返回大类管理</a>) </p>
<table width="100%" border="0" cellpadding="5" cellspacing="2" bordercolor="#6666FF" bgcolor="#6666FF">
  <script language=javascript>
function checkall()
{
   var a = document.getElementsByTagName("input");//getElementsByTagName传回指定名称的元素集合,是一种方法
   //alert(document.getElementsByName("checkALL").checked);
   if(frmname.check1.checked)
   {
       for (var i=0; i<a.length; i++)
       if (a[i].type == "checkbox") a[i].checked = true;
   }
   else
   {
      for (var i=0; i<a.length; i++)
       if (a[i].type == "checkbox") a[i].checked = false;
   }
}
</script>
  <tr>
    <td width="12%" height="26" align="center"><span class="STYLE1">
      <input type="checkbox" name="check1" value="checkbox" onclick="return checkall();" />小类排序</span></td>
    <td width="45%" align="center"><span class="STYLE1">小类名称</span></td>
    <td width="23%" align="center"><span class="STYLE1">下级</span></td>
    <td width="20%" align="center"><span class="STYLE1">操作</span></td>
  </tr>
  <%
  sqlstr="select * from SmallClass where B_id="&B_id&" order by s_order asc"
  rs.open sqlstr,conn,0,1
  do while not rs.eof
  
  %>
  <tr>
    <td bgcolor="#FFFFFF"><input type="checkbox" name="ID" value="<%=rs("s_ID")%>" /><%=rs("s_order")%></td>
    <td bgcolor="#FFFFFF"><%=rs("s_title")%></td>
    <td align="center" bgcolor="#FFFFFF"><a href="Article.asp?s_id=<%=rs("s_id")%>">文章管理</a></td>
    <td align="center" bgcolor="#FFFFFF"> <a href="SmallClass_del.asp?s_id=<%=rs("s_id")%>&b_id=<%=b_id%>">删除</a> | 修改 </td>
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
      <td width="16%" align="right" nowrap="nowrap" bgcolor="#66CCFF">小类名称:</td>
      <td width="36%"><input name="s_title" type="text" id="s_title" size="40" /></td>
    </tr>
    <tr>
      <td align="right" nowrap="nowrap" bgcolor="#66CCFF">类别介绍：</td>
      <td><textarea name="s_content" cols="40" rows="8" id="s_content"></textarea></td>
    </tr>
    <tr>
      <td align="right" nowrap="nowrap" bgcolor="#66CCFF">排序：</td>
      <td><input name="s_order" type="text" id="s_order" value="<%=s_order%>" /></td>
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
