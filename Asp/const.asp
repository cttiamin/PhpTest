<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
option explicit
%>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>常量举例</title>
</head>

<body>
<div align="center">
  <%
  dim bb
  bb=234
  response.Write bb
  response.Write "<br>"
  const aa="这里是字符串" 'asdfasdfasdf
  const dd=#2008-8-8#
  response.Write dd
  'response.Write aa
  'response.write "<br>"
 'dim bb
bb=aa
'response.write aa
'response.write"<br>"
response.write bb 
response.write"<br>"	
response.write date() 	'获取当前时间
%>
</div>
</body>
</html>
