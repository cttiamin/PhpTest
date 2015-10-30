<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="../include/admincoon.asp" -->
<%
dim rs,sqlstr,s_id,s_title,s_content,s_content2,s_link,picture,s_order,a_title,a_content,a_order,a_link,a_picture,a_content2
set rs=server.CreateObject("adodb.recordset")
	s_id=request.QueryString("s_id")
   if s_id="" then
   response.Redirect("bigclass.asp")
   end if
sqlstr="select * from smallclass where s_id="&s_id
rs.open sqlstr,conn,0,1
b_id=rs("b_id")
a_title=rs("s_title")
a_content=rs("s_content")
a_order=rs("s_order")
a_content2=rs("s_content2")
a_link=rs("s_link")
a_picture=rs("picture")

s_content2=request.form("s_content2")
s_link=request.form("s_link")
picture=request.form("picture")
s_title=request.form("s_title")
s_content=request.form("s_content")	
s_order=request.form("s_order")

if s_title<>"" then
	conn.execute "update smallclass set s_title='"&s_title&"',s_content='"&s_content&"',s_order="&s_order&",s_content2='"&s_content2&"',picture='"&picture&"',s_link='"&s_link&"' where s_id="&s_id'
	 response.write("<script language=javascript>")
  response.write("alert('文章修改成功');")
  response.write("location='smallclass.asp?b_id="&b_id&"';")
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
<table width="500" border="0" align="center" cellpadding="5" cellspacing="0">
  <form id="form1" name="form1" method="post" action="">
    <tr>
      <td width="16%" align="right" nowrap="nowrap" bgcolor="#66CCFF">小类名称:</td>
      <td width="36%"><input name="s_title" type="text" id="s_title" value="<%=a_title%>" size="40" /></td>
    </tr>
    <tr>
      <td align="right" nowrap="nowrap" bgcolor="#66CCFF">内容介绍：</td>
      <td><textarea name="s_content2" cols="60" rows="10" id="s_content2"><%=a_content2%></textarea></td>
    </tr>
    <tr>
      <td align="right" nowrap="nowrap" bgcolor="#66CCFF">类别介绍：</td>
      <td><input name="s_content" type="hidden" id="s_content" value="<%=a_content%>">
          <iframe id="eWebEditor1" src="eWebEditor/eWebEditor.asp?id=s_content&amp;style=mpn" frameborder="0" scrolling="No" width="650" height="300"></iframe></td>
    </tr>
    <tr>
      <td align="right" nowrap="nowrap" bgcolor="#66CCFF">链接网站：</td>
      <td><input name="s_link" type="text" id="s_link" value="<%=s_link%>" size="60" /></td>
    </tr>
    <tr>
      <td align="right" nowrap="nowrap" bgcolor="#66CCFF">图片：</td>
      <td><p>
        <input name="picture" type="text" id="picture" value="<%=a_picture%>" />
        <input type="button" name="button" value="选择图片" onclick="javascript:window.open('upfkdd/PhotoSelect.asp?PhotoUrlID=0', 'selupfile', 'width=800,height=600,toolbar=no,menubar=no, scrollbars=yes, resizable=no, location=no, status=yes');" />
      </p>
          <iframe style="top:2px" id="UploadFiles" src="upfkdd/Upload_Photo.asp?PhotoUrlID=0" frameborder="0" scrolling="No" width="320" height="25"></iframe>
        </p></td>
    </tr>
    <tr>
      <td align="right" nowrap="nowrap" bgcolor="#66CCFF">排序：</td>
      <td><input name="s_order" type="text" id="s_order" value="<%=a_order%>" /></td>
    </tr>
    <tr>
      <td align="right" nowrap="nowrap" bgcolor="#66CCFF">&nbsp;</td>
      <td><input type="submit" name="Submit" value="提交" /></td>
    </tr>
  </form>
</table>
</body>
</html>
