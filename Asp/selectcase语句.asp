<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<%
dim a,b
b=1
a=b
select case a
case 1
  response.write "a��ֵΪ1"
case 2
  response.write "a��ֵΪ2"
case "3"
  response.write "a��ֵΪ3"
case 4
  response.write "a��ֵΪ4"
case 5
  response.write "a��ֵΪ5"
case else
  response.write "a��ֵ���ڷ�Χ֮��"
end select
  
%>



</body>
</html>
