<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp" -->
<%
dim rs,sqlstr,id,username,userpwd,fname,ssex,age,mail,quest,answer,regtime,jibie,is_shenhe
id=request.QueryString("id")
 set rs=server.CreateObject("adodb.recordset")
 sqlstr="select * from huiyuan where id="&id
 rs.open sqlstr,conn,0,1
  username=rs("username")
  userpwd=rs("userpwd")
  fname=rs("fname")
  ssex=rs("ssex")
  age=rs("age")
  mail=rs("mail")
  quest=rs("quest")
  answer=rs("answer")
  regtime=rs("regtime")
  jibie=rs("jibie")
  is_shenhe=rs("is_shenhe")
   
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
      <td width="82" align="center">regtime</td>
      <td width="82" align="center">jibie</td>
      <td width="82" align="center">is_shenhe</td>
    </tr>
	
	
    <tr>
    
      <td align="center"><input name="username" type="text" id="username" value="<%=username%>" size="8" /> 
	  <input name="id" type="hidden" id="id" value="<%=id%>" size="3" /> </td>
      <td align="center"><input name="userpwd" type="text" id="userpwd" value="<%=userpwd%>" size="9" /></td>
      <td align="center"><input name="fname" type="text" id="fname" value="<%=fname%>" size="5" /></td>
      <td align="center"><input name="ssex" type="text" id="ssex" value="<%=ssex%>" size="3" /></td>
      <td align="center"><input name="age" type="text" id="age" value="<%=age%>" size="9" /></td>
      <td align="center"><input name="mail" type="text" id="mail" value="<%=mail%>" size="9" /></td>
      <td align="center"><input name="quest" type="text" id="quest" value="<%=quest%>" size="13" /></td>
      <td align="center"><input name="answer" type="text" id="answer" value="<%=answer%>" size="13" /></td>
      <td align="center"><input name="regtime" type="text" id="regtime" value="<%=regtime%>" size="9" /></td>
      <td align="center"><input name="jibie" type="text" id="jibie" value="<%=jibie%>" size="3" /></td>
      <td align="center"><input name="is_shenhe" type="text" id="is_shenhe" value="<%=is_shenhe%>" size="9" /></td>
    </tr>
  </table>
  <div align="right">
    <input type="submit" name="Submit" value="提交" />
  </div>
</form>
</body>
</html>
