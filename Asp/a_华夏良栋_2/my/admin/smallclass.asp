<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>



<!--#include file="../include/admincoon.asp" -->

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
 
    dim s_title,s_content,s_order,s_picture
   s_title=request.Form("s_title")
   s_content=request.form("s_content")
   a_order=int(request.Form("s_order"))
   s_picture=request.Form("picture")
   s_content2=trim(request.Form("s_content2"))
   s_link=trim(request.Form("s_link"))
   if s_title<>"" then
      sqlstr="insert into smallclass(B_id,s_title,s_content,s_content2,s_link,s_order,picture)values("&b_id&",'"&s_title&"','"&s_content&"','"&s_content2&"','"&s_link&"',"&a_order&",'"&s_picture&"')"
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
</style>
<link href="../css.css" rel="stylesheet" type="text/css" />
</head>

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
</script><form id="frmname" name="frmname" method="post" action="" onclick="retrun checkall(); ">
  <tr>
    <td width="12%" height="26" align="center"><span class="STYLE1">
      <input type="checkbox" name="check1" value="checkbox" onclick="return checkall();" />小类排序</span></td>
    <td width="45%" align="center"><span class="STYLE1">小类名称</span></td>
    <td width="23%" align="center"><span class="STYLE1">下级</span></td>
    <td width="20%" align="center"><span class="STYLE1">操作 | <a href="smallclass.asp?b_id=<%=b_id%>&amp;add=1" class="font01">添加类别</a> </span></td>
  </tr>
  <%
  sqlstr="select * from SmallClass where B_id="&B_id&" order by s_order asc"
  rs.open sqlstr,conn,0,1
  do while not rs.eof
  
  %>
  <tr>
    <td bgcolor="#66FFFF"><input type="checkbox" name="ID" value="<%=rs("s_ID")%>" /><%=rs("s_order")%></td>
    <td bgcolor="#66FFFF"><%=rs("s_title")%></td>
    <td align="center" bgcolor="#66FFFF"><a href="Article.asp?s_id=<%=rs("s_id")%>" class="font01">文章管理</a></td>
    <td align="center" bgcolor="#66FFFF"> <a href="SmallClass_del.asp?s_id=<%=rs("s_id")%>&b_id=<%=b_id%>" class="font01">删除</a> | <a href="smallclass_update.asp?s_id=<%=rs("s_id")%>" class="font01">修改</a> </td>
  </tr>
  <%
  rs.movenext
  loop
  rs.close
  %></form>
</table>


<p>&nbsp;</p>
<%
if request.QueryString("add")="1" then
%>
  <table width="500" border="0" align="center" cellpadding="5" cellspacing="0">
    <form id="form1" name="form1" method="post" action="">
    <tr>
      <td width="16%" align="right" nowrap="nowrap" bgcolor="#66CCFF">小类名称:</td>
      <td width="36%" bgcolor="#66FFFF"><input name="s_title" type="text" id="s_title" size="40" /></td>
    </tr>
	
	   <tr>
	     <td align="right" nowrap="nowrap" bgcolor="#66CCFF">内容介绍：</td>
	     <td bgcolor="#66FFFF"><textarea name="s_content2" cols="60" rows="10" id="s_content2"></textarea></td>
    </tr>
	   <tr>
      <td align="right" nowrap="nowrap" bgcolor="#66CCFF">类别介绍：</td>
      <td bgcolor="#66FFFF"><input name="s_content" type="hidden" id="s_content"  />
        <iframe id="eWebEditor1" src="eWebEditor/eWebEditor.asp?id=s_content&amp;style=mpn" frameborder="0" scrolling="No" width="650" height="300"></iframe></td>
    </tr>
       <tr>
         <td align="right" nowrap="nowrap" bgcolor="#66CCFF">链接网站：</td>
         <td bgcolor="#66FFFF"><input name="s_link" type="text" size="60" id="s_link" /></td>
       </tr>
    <tr>
      <td align="right" nowrap="nowrap" bgcolor="#66CCFF">图片：</td>
      <td bgcolor="#66FFFF">
        <p>
          <input name="picture" type="text" id="picture" />
          <input type="button" name="button" value="选择图片" onClick="javascript:window.open('upfkdd/PhotoSelect.asp?PhotoUrlID=0', 'selupfile', 'width=800,height=600,toolbar=no,menubar=no, scrollbars=yes, resizable=no, location=no, status=yes');">
        </p>
        <iframe style="top:2px" id="UploadFiles" src="upfkdd/Upload_Photo.asp?PhotoUrlID=0" frameborder="0" scrolling="No" width="320" height="25"></iframe> 
      </p></td>
    </tr>
    <tr>
      <td align="right" nowrap="nowrap" bgcolor="#66CCFF">排序：</td>
      <td bgcolor="#66FFFF"><input name="s_order" type="text" id="s_order" value="<%=s_order%>" /></td>
    </tr>
    <tr>
      <td align="right" nowrap="nowrap" bgcolor="#66CCFF">&nbsp;</td>
      <td bgcolor="#66FFFF"><input type="submit" name="Submit" value="提交" /></td>
    </tr></form>
</table>
  <%

  end if
  %>

<p>&nbsp;</p>
</body>
</html>
