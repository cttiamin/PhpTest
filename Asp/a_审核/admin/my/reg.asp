<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp" -->
<%
dim username,pwd,ssex,age,fname,quest,answer,mail,jibie,sqlstr,rs
	    username=request.form("username")
	pwd=request.form("pwd")
	age=request.form("age")
	ssex=request.form("ssex")
	fname=request.form("fname")
	quest=request.form("quest")
	answer=request.form("answer")
	mail=request.form("mail")
	jibie=request.form("jibie")
	set rs=server.CreateObject("adodb.recordset")
if username<>"" then 
	sqlstr="select * from [huiyuan] where username='"&username&"'"
	rs.open sqlstr,conn,0,1
	 

	if rs.eof then
  sqlstr="insert into huiyuan(username,userpwd,fname,ssex,age,mail,quest,answer,jibie)values('"&username&"','"&pwd&"','"&fname&"','"&ssex&"','"&age&"','"&mail&"','"&quest&"','"&answer&"','"&jibie&"')"	
  conn.execute sqlstr
  response.write("<script language=javascript>")
  response.write("alert('用户注册成功');")
  response.write("location='userlogin.asp';")
  response.write("</script>")
	else 
	response.write("<script language=javascript>")
	response.write("alert('用户名已存在');")
	response.write("location='reg.asp';")
	response.write("</script>")
	end if
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
  <table width="314" border="1" align="center" bgcolor="#00CCFF">
    <tr>
      <td colspan="2" align="center">会员注册</td>
    </tr>
    <tr>
      <td align="right">用户名：</td>
      <td><input name="username" type="text" id="username" /></td>
    </tr>
    <tr>
      <td align="right">密码：</td>
      <td><input name="pwd" type="password" id="pwd" /></td>
    </tr>
    <tr>
      <td align="right">确认密码：</td>
      <td><input name="pwd2" type="password" id="pwd2" /></td>
    </tr>
    <tr>
      <td align="right">性别：</td>
      <td><input name="ssex" type="radio" value="男" checked="checked" />
        男
        <input type="radio" name="ssex" value="女" />
        女</td>
    </tr>
    <tr>
      <td align="right">年龄：</td>
      <td><select name="age" id="age">
	  <%
	  dim i
	  i=1
	  for i= 1 to 100
	  %>
        <option value="<%=i%>"><%=i%></option>
		<%
		next
		%>
      </select>
      岁</td>
    </tr>
    <tr>
      <td align="right">性名：</td>
      <td><input name="fname" type="text" id="fname" /></td>
    </tr>
    <tr>
      <td align="right">安全问题：</td>
      <td><input name="quest" type="text" id="quest" /></td>
    </tr>
    <tr>
      <td align="right">答案：</td>
      <td><input name="answer" type="text" id="answer" /></td>
    </tr>
    <tr>
      <td align="right">email：</td>
      <td><input name="mail" type="text" id="mail" /></td>
    </tr>
    <tr>
      <td align="right">注册类型：</td>
      <td><select name="jibie" id="jibie">
        <option value="1">普通会员</option>
        <option value="2">vip会员</option>
        <option value="3">钻石会员</option>
      </select>      </td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td>
        <div align="left">
          <input type="submit" name="Submit" value="提交" /> 
        &nbsp;&nbsp;
        <input type="submit" name="Submit2" value="重置" />
        </div></td>
    </tr>
  </table>
</form>
</body>
</html>
