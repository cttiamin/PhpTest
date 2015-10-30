<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="../include/conn.asp" -->
<%
dim username,pwd,fname,ssex,age,mail,quest,answer,jibie,sqlstr
    username=request.Form("username")
	pwd=request.Form("pwd")
	fname=request.Form("fname")
	ssex=request.Form("ssex")
	age=request.Form("y_age")&"-"&request.Form("m_age")
	mail=request.Form("mail")
	quest=request.Form("quest")
	answer=request.Form("answer")
	jibie=request.Form("jibie")
  if username<>"" then
     sqlstr="insert into [huiyuan]([username],[userpwd],[fname],[ssex],[age],[mail],[quest],[answer],[jibie])values('"&username&"','"&pwd&"','"&fname&"','"&ssex&"','"&age&"','"&mail&"','"&quest&"','"&answer&"',"&jibie&")"
	 'response.write sqlstr
	 'response.end
	 conn.execute sqlstr
	  response.write("<script language=javascript>")
	  response.write("alert('恭喜你注册成功了,点击确定登录网站');")
	  response.write("location='login.asp';")
	  response.write("</script>")
	 
 end if
%>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
<!--
body {
	background-color: #CCFFFF;
}
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="774" border="1" align="center" bgcolor="#6699CC">
    <tr>
      <td colspan="2" align="center">会员注册</td>
    </tr>
    <tr>
      <td width="263" align="right">用户名：</td>
      <td width="495"><input name="username" type="text" id="username" /></td>
    </tr>
    <tr>
      <td align="right">密码：</td>
      <td><input name="pwd" type="password" id="pwd" /></td>
    </tr>
    <tr>
      <td align="right">确认密码： </td>
      <td><input name="pwd2" type="password" id="pwd2" /></td>
    </tr>
    <tr>
      <td align="right">姓名：</td>
      <td><input name="fname" type="text" id="fname" /></td>
    </tr>
    <tr>
      <td align="right">称呼：</td>
      <td><input name="ssex" type="radio" value="男" checked="checked" />
        先生
        <input type="radio" name="ssex" value="女" />
        女士</td>
    </tr>
    <tr>
      <td align="right">出生日期： </td>
      <td><select name="y_age" id="y_age">
	<%
	i=2008
	do while i>=1970
	%>
        <option value="<%=i%>"><%=i%></option>
		<%
		i=i-1
		loop
		%>
      </select>
      年
      <select name="m_age" id="m_age">
	  <%

	  for i=1 to 12
	  
	  %>
        <option value="<%=i%>"><%=i%></option>
		<%
		next

		%>
            </select>
      月</td>
    </tr>
    <tr>
      <td align="right">email:</td>
      <td><input name="mail" type="text" id="mail" /></td>
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
      <td height="17" align="right">注册类形：</td>
      <td><select name="jibie" id="jibie">
        <option value="1" selected="selected">普通会员</option>
        <option value="2">vip会员</option>
        <option value="3">钻石会员</option>
	 
      </select>      </td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td><input type="submit" name="Submit" value="提交" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="submit" name="Submit2" value="重置" /></td>
    </tr>
  </table>
</form>
</body>
</html>
