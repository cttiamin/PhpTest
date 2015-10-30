<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
 <!--
<%
dim car() 
redim car(10) 
car(0)="红色"
car(1)="彩色"
response.write car(1)
'response.write "<br>"
'redim preserve car(20)

'response.write car(1)
%>
-->
<%
dim ab(5,5,5)  '定义一个数组，不能超过5的
ab(0,0,5)="赵轶博是个好孩子"		
ab(0,1,0)="知道就行"
'response.write ab(0,1,0)   '输出数组 ab(0,1,0) 的值
%>
<%
dim a,b,c
a=2
b=20
c=a & b
'response.write c
%>
</body>
</html>
