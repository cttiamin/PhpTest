<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>

<%
dim i
for i=1 to request.ServerVariables.count
response.Write "<font color=blue>"&request.ServerVariables.key(i)&"</font><font color=red> is <font>"
response.Write "<font color=green>"&request.ServerVariables.item(i)&"</font><br>"
next


%><br />
<br />
<br />
�������˻�����������Ϊ<%=request.ServerVariables.count%>
</body>
</html>
