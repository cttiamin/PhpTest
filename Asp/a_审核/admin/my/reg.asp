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
  response.write("alert('�û�ע��ɹ�');")
  response.write("location='userlogin.asp';")
  response.write("</script>")
	else 
	response.write("<script language=javascript>")
	response.write("alert('�û����Ѵ���');")
	response.write("location='reg.asp';")
	response.write("</script>")
	end if
end if

	
%>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="314" border="1" align="center" bgcolor="#00CCFF">
    <tr>
      <td colspan="2" align="center">��Աע��</td>
    </tr>
    <tr>
      <td align="right">�û�����</td>
      <td><input name="username" type="text" id="username" /></td>
    </tr>
    <tr>
      <td align="right">���룺</td>
      <td><input name="pwd" type="password" id="pwd" /></td>
    </tr>
    <tr>
      <td align="right">ȷ�����룺</td>
      <td><input name="pwd2" type="password" id="pwd2" /></td>
    </tr>
    <tr>
      <td align="right">�Ա�</td>
      <td><input name="ssex" type="radio" value="��" checked="checked" />
        ��
        <input type="radio" name="ssex" value="Ů" />
        Ů</td>
    </tr>
    <tr>
      <td align="right">���䣺</td>
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
      ��</td>
    </tr>
    <tr>
      <td align="right">������</td>
      <td><input name="fname" type="text" id="fname" /></td>
    </tr>
    <tr>
      <td align="right">��ȫ���⣺</td>
      <td><input name="quest" type="text" id="quest" /></td>
    </tr>
    <tr>
      <td align="right">�𰸣�</td>
      <td><input name="answer" type="text" id="answer" /></td>
    </tr>
    <tr>
      <td align="right">email��</td>
      <td><input name="mail" type="text" id="mail" /></td>
    </tr>
    <tr>
      <td align="right">ע�����ͣ�</td>
      <td><select name="jibie" id="jibie">
        <option value="1">��ͨ��Ա</option>
        <option value="2">vip��Ա</option>
        <option value="3">��ʯ��Ա</option>
      </select>      </td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td>
        <div align="left">
          <input type="submit" name="Submit" value="�ύ" /> 
        &nbsp;&nbsp;
        <input type="submit" name="Submit2" value="����" />
        </div></td>
    </tr>
  </table>
</form>
</body>
</html>
