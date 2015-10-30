<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>

<!--#include file="conn.asp" -->
<%
dim sqlstr,username,userpwd,fname,ssex,age,mail,quest,answer,regtime,jibie,is_shenhe,id
	id=request.form("id")
  username=request.form("username")
  userpwd=request.form("userpwd")
  fname=request.form("fname")
  ssex=request.form("ssex")
  age=request.form("age")
  mail=request.form("mail")
  quest=request.form("quest")
  answer=request.form("answer")
  regtime=request.form("regtime")
  jibie=request.form("jibie")
  is_shenhe=request.form("is_shenhe")
  if username<>"" then 
  sqlstr="insert into huiyuan(username,userpwd,fname,ssex,age,mail,quest,answer,jibie,is_shenhe)values('"&username&"','"&userpwd&"','"&fname&"','"&ssex&"','"&age&"','"&mail&"','"&quest&"','"&answer&"','"&jibie&"','"&is_shenhe&"')"
  'response.write ("asdfasdf")
  'response.end
  conn.execute sqlstr
  response.write("<script language=javascript>")
  response.write("alert('文章添加成功');")
  response.write("location='user_ls.asp';")
  response.write("</script>")
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
  <table width="671" height="126" border="1" align="center">
    <tr>
      
      <td width="62" align="center">username</td>
      <td width="62" align="center">userpwd</td>
      <td width="62" align="center">fname</td>
      <td width="62" align="center">ssex</td>
      <td width="99" align="center">age</td>
      <td width="82" align="center">mail</td>
      <td width="82" align="center">quest</td>
      <td width="82" align="center">answer</td>
      
      <td width="82" align="center">jibie</td>
      <td width="82" align="center">is_shenhe</td>
    </tr>
	
	
    <tr>
    
      <td align="center"><input name="username" type="text" id="username" size="8" /></td>
      <td align="center"><input name="userpwd" type="text" id="userpwd" size="9" /></td>
      <td align="center"><input name="fname" type="text" id="fname" size="5" /></td>
      <td align="center"><input name="ssex" type="text" id="ssex" size="3" /></td>
      <td align="center"><input name="age" type="text" id="age" size="9" /></td>
      <td align="center"><input name="mail" type="text" id="mail" size="9" /></td>
      <td align="center"><input name="quest" type="text" id="quest" size="13" /></td>
      <td align="center"><input name="answer" type="text" id="answer" size="13" /></td>
     
      <td align="center"><input name="jibie" type="text" id="jibie" size="3" /></td>
      <td align="center"><input name="is_shenhe" type="text" id="is_shenhe" size="9" /></td>
    </tr>
  </table>
  <div align="right">
    <input type="submit" name="Submit" value="提交" />
  </div>
</form>
</body>
</html>
