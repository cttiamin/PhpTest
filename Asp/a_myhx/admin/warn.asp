<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
Response.Buffer = true
'禁用缓存
Response.Expires = -10000
Response.AddHeader "pragma", "no-cache"
Response.AddHeader "cache-control", "private"
Response.CacheControl = "no-cache"
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<table width="472" height="103" border="0" align="center">
  <tr>
    <td>您的身份已过期或从未登录到本中心。</td>
  </tr>
  <tr>
    <td>注:当您在本网站<%=Session.Timeout%>分钟内若不刷新页面，为安全起见，系统自动过期。
		<a href="login.asp" target="_top">重新登录</a>
		</td>
  </tr>
  <tr>
    <td>您只有以管理员身份后才能进行此项操作！</td>
  </tr>
</table>
</body>
</html>
