<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<%
select case request.form("browsertype")
case "internet explorer"
	response.Redirect "http://www.sina.com.cn"
case "netscape navigator"
	response.Redirect "http://www.sohu.com.cn"
end select
%>
</body>
</html>
