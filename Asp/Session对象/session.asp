<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<p>
  <%
  response.write request("name1")&"<br>ǰ"
session("name1")=request("name1")
session("age")=request("age")
%>
</p>
<p>��Ĵ�����:<%=session("name1")%> <a href="session1.asp">����ת��</a> </p>
<form id="form1" name="form1" method="post" action="">
  <p>�������û���
    <input type="text" name="name1" />
  </p>
  <p>���������:
    <input type="text" name="age" />
    <input type="submit" name="Submit" value="�ύ" />
    </p>
</form>
</body>
</html>
