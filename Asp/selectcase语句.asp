<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<%
dim a,b
b=1
a=b
select case a
case 1
  response.write "a的值为1"
case 2
  response.write "a的值为2"
case "3"
  response.write "a的值为3"
case 4
  response.write "a的值为4"
case 5
  response.write "a的值为5"
case else
  response.write "a的值不在范围之内"
end select
  
%>



</body>
</html>
