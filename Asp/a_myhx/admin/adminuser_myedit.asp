<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
Response.Buffer = true
'���û���
Response.Expires = -10000
Response.AddHeader "pragma", "no-cache"
Response.AddHeader "cache-control", "private"
Response.CacheControl = "no-cache"

if Session("userqx") = "1" or Session("userqx") = "9" then
	username = Session("username")
	if username = "" then
		Response.Redirect "warn.asp"
	end if
else
	Response.Redirect "warn.asp"
end if
%>
<!--#include file="dsn.asp" -->
<%
set cn = Server.CreateObject("ADODB.Connection")
cn.Open mycnstr
set rs = Server.CreateObject("ADODB.Recordset")
sql = "select realname,userpass from adminuser where username='" & username & "'"

if Request.ServerVariables("REQUEST_METHOD") = "POST" then
	
	'�������������Ƿ���Ϲ淶
	password = Lcase(Request.Form("password"))
	if password = "" then
%>
		<script language="javascript">
			alert("���벻��Ϊ�գ�");
			history.back();
		</script>
<%
		Response.end
	end if

	'�������ݿ�
	rs.Open sql, cn, 0, 2, 1
	if not rs.EOF then
		realname = rs("realname")

		rs("userpass") = password
		rs.Update
	end if

	'������ݿ�����Ƿ���ȷ
	if err > 0 then
		infotext = "�޸����뷢�����ϣ����Ժ����ԣ�"
	else
		infotext = "�޸�����ɹ���"
	end if

else

	'���ҵ�ǰ�û�����ʵ���ƺ�����
	rs.Open sql, cn, 0, 1, 1
	if not rs.EOF then
		realname = rs("realname")
		password = rs("userpass")
	end if

end if

rs.Close
set rs = nothing
cn.Close
set cn = nothing
%>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>
<style>
body,table,tr
{
	font-size:12px;
	font-family:����;
	line-height:20px;
}
</style>
<script language="javascript">
	function check()
	{
		var obj = document.form1;

		if (obj.password.value == '')
		{
			alert("���벻��Ϊ�գ�");
			obj.password.focus();
			return false;
		}

		if (obj.password.value != obj.password2.value)
		{
			alert("������������벻һ�£�");
			obj.password.value = '';
			obj.password2.value = '';
			obj.password.focus();
			return false;
		}

		return true;
	}


	function checkStr(str)
	{
		tmp = str.search(/\s/);
		if (tmp == 0 || tmp == str.length - 1)
		{
			alert("�벻Ҫ��������βʹ�ÿո�");
			return false;
		}

		return true;
	}
</script>

<body>
<table width="648" height="149" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#00FFFF">
<form name="form1" action="adminuser_myedit.asp" method="post" onSubmit="return check();">
  <tr>
    <td colspan="2" align="center">�޸�����</td>
  </tr>
  <tr>
    <td width="171" align="right">&nbsp;</td>
    <td width="471"><%=infotext%></td>
  </tr>
  <tr>
    <td align="right">�������ƣ�</td>
    <td><%=realname%></td>
  </tr>
  <tr>
    <td align="right">�������룺</td>
    <td><input type="password" name="password"  value="<%=password%>" size="20"/></td>
  </tr>
  <tr>
    <td align="right">ȷ�����룺</td>
    <td><input type="password" name="password2"  value="<%=password%>" size="20"/></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td><input type="submit" name="Submit" value="ȷ���ύ" /></td>
  </tr></form>
</table>
</body>
</html>
