<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<table width="100%" border="1" cellpadding="0" cellspacing="0">  
		<%
		dim i
		for i=1 to 30 
		if i>20 then
		%>
    <tr>
    <td align="center">循环语句停止了</td>
	</tr>
		<%
		exit for
		end if
		%>
	
    <tr>
    <td align="center"><%=i%></td>
	</tr>
		<%
		next
		%>
</table>

</body>
</html>
