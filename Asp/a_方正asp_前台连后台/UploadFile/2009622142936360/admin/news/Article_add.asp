<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="../../include/adminconn.asp" -->
<%
dim s_id,rs,sqlstr
s_id=request.QueryString("s_id")
set rs=server.CreateObject("adodb.recordset")
dim a_title,a_title2,a_state,flag,a_link,a_content2,a_content,picture
		a_title=request.Form("a_title")
	   
		a_title2=request.Form("a_title2")
		a_state=request.Form("a_state")
		flag=request.Form("flag")
		a_link=request.Form("a_link")
		a_content2=request.Form("a_content2")
		a_content=request.Form("a_content")
		picture=request.Form("picture")
	if a_title<>"" then
		sqlstr="select * from article"
		rs.open sqlstr,conn,3,3
		rs.addNew
		    rs("s_id")=s_id
			rs("a_title")=a_title
			rs("a_title2")=a_title2
			rs("a_state")=a_state
			rs("flag")=flag
			rs("a_link")=a_link
			rs("a_content2")=a_content2
			rs("a_content")=a_content2
			rs("picture")=picture
		rs.Update
		rs.close
		  response.write("<script language=javascript>")
		  response.write("alert('添加成功');")
		  response.write("location='article.asp?s_id="&s_id&"';")
		  response.write("</script>")
	end if
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body><form id="form1" name="form1" method="post" action="">
  <table width="85%" border="1" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td align="right" bgcolor="#66FFFF">栏目名称：</td>
      <td>
			<%
			sqlstr="select s_title from SmallClass where S_id="&s_id
			rs.open sqlstr,conn,0,1
			response.write(rs("s_title"))
			rs.close
			%>
	  </td>
    </tr>
    <tr>
      <td width="22%" align="right" bgcolor="#66FFFF">文章标题：</td>
      <td width="78%"><input name="a_title" type="text" id="a_title" size="60" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#66FFFF">副标题:</td>
      <td><input name="a_title2" type="text" id="a_title2" size="50" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#66FFFF">是否显示：</td>
      <td><input type="radio" name="a_state" value="0" />
        不显示 
          <input name="a_state" type="radio" value="1" checked="checked" />
        显示</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#66FFFF">是否推荐:</td>
      <td><input name="flag" type="radio" value="0" checked="checked" />
        不推荐
          <input type="radio" name="flag" value="1" />
推荐
<input type="radio" name="flag" value="2" />
重点推荐</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#66FFFF">链接网址:</td>
      <td><input name="a_link" type="text" id="a_link" size="60" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#66FFFF">文章简介:</td>
      <td><textarea name="a_content2" cols="60" rows="5" id="a_content2"></textarea></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#66FFFF">详细内容:</td>
      <td><textarea name="a_content" cols="60" rows="18" id="a_content"></textarea></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#66FFFF">文章图片:</td>
      <td><input name="picture" type="text" id="picture" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#66FFFF">&nbsp;</td>
      <td><input type="submit" name="Submit" value=" 提 交 " /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#66FFFF">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
