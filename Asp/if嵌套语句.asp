<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<%
dim a,b
dim c,d
a=125
b=14
c=a+b
d=a-b
if a>100 then   '��a����100ʱ
  if b>20 then   '��b����20ʱ
     response.write c	'���c	 
  elseif b<20 then		'b<20ʱ
     response.write d   '���d
  end if			
else
  response.Write "û�з��������Ĵ�"
end if




%>
</body>
</html>
