<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
dim aa,bb,i
bb=request("textfield")
aa=request.TotalBytes
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<p>
  <%
if bb<>"" then
response.Write "�ӿͻ��˽��ܵ�����Ϊ:"& aa & "�ֽ�"
response.write "<p>���ղ��ύ��������"&bb&"</p>"

end if
%>
</p>

<form id="form1" name="f" method="post" action="request_totalbytes����.asp">
  <input type="text" name="textfield" />
  <input type="submit" name="Submit" value=" " />
</form> 
</body>
</html>
