<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<p>
  Post������<%
for i=1 to request.totalbytes
array1=request.binaryread(1)
response.write array1
next
%>
url:<%= Request.ServerVariables("aa")%></p>
<form id="form1" name="form1" method="post" action="">
  <input type="text" name="textfield" />
  <input type="submit" name="Submit" value="�ύ" />
</form>
</body>
</html>
