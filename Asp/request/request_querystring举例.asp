<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<%
dim abc,bcd
abc=request.querystring("name")
bcd=request.form("name1")
if abc<>"" then
response.write "���ղ�����(get��ʽ)�������ǣ�"&abc&"<br>"
end if
if bcd<>"" then
response.write "���ղ�����(post��ʽ)�������ǣ�"&bcd&"<br>"
end if
%>
<form id="form1" name="form1" method="get" action="request_querystring����.asp">
  get�ύ��ʽ:
  <input name="name" type="text" value="����������" onclick="this.value=''" />
  <input type="submit" name="Submit" value="�ύ" />
</form>
<form id="form2" name="form2" method="post" action="request_querystring����.asp">
  post�ύ��ʽ:
    <input name="name1" type="text" value="����������" onclick="this.value=''" />
  <input type="submit" name="Submit1" value="�ύ" />
</form>
</body>
</html>
