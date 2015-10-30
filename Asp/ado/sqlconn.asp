<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
set conon=server.CreateObject("adodb.connection")
conon.open "driver={sql server};server=(local);UID=sa;Pwd=sa;database=student"
'response.write dqconn
'conn.close
'set conn=nothing
set rs11=server.CreateObject("adodb.recordset")
sqlstr="select * from students"
rs11.open sqlstr,conon,1,1
while not rs11.eof
response.write rs11.fields("SName")&"<br>"
rs11.movenext
wend
rs11.close
set rs11=nothing
conon.close
set conon=nothing
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
</body>
</html>
