<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp" -->
<%
dim rs,sqlstr,username
	username=request.form("username")
	set rs=server.createobject("adodb.recordset")
 if username<>"" then
	sqlstr="select * from huiyuan where username='"&username&"'"
	rs.open sqlstr,conn,0,1
	if rs.eof then
	response.write("<script language=javascript>")
	response.write("alert('��������ȷ���û���');")
	response.write("</script>")
	else 
	response.redirect("lookpwd2.asp?id="&rs("id"))
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
  <table width="500" height="76" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#66FFCC">
    <tr>
      <td width="490">�һ������һ��:</td>
    </tr>
    <tr>
      <td>����������û�����
      <input name="username" type="text" id="username" />
      <input type="submit" name="Submit" value="�ύ" /></td>
    </tr>
  </table>
</form>
</body>
</html>
