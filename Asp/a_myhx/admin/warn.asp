<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
Response.Buffer = true
'���û���
Response.Expires = -10000
Response.AddHeader "pragma", "no-cache"
Response.AddHeader "cache-control", "private"
Response.CacheControl = "no-cache"
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<table width="472" height="103" border="0" align="center">
  <tr>
    <td>��������ѹ��ڻ��δ��¼�������ġ�</td>
  </tr>
  <tr>
    <td>ע:�����ڱ���վ<%=Session.Timeout%>����������ˢ��ҳ�棬Ϊ��ȫ�����ϵͳ�Զ����ڡ�
		<a href="login.asp" target="_top">���µ�¼</a>
		</td>
  </tr>
  <tr>
    <td>��ֻ���Թ���Ա��ݺ���ܽ��д��������</td>
  </tr>
</table>
</body>
</html>
