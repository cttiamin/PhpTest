<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ɾ���ո�</title>
</head>

<body>
<%
dim abc
abc="  ��  ���   "
response.Write "ltrim(abc)=��" & ltrim(abc)&"��<br>"   'ɾ����߿ո�
response.Write "rtrim(abc)=��" & rtrim(abc)&"��<br>"   'ɾ���ұ߿ո�
response.Write "trim(abc)=��" & trim(abc)&"��<br>"   'ɾ�����˿ո�

%>
</body>
</html>
