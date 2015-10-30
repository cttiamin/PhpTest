<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<%
dim a,b
dim c,d
a=125
b=14
c=a+b
d=a-b
if a>100 then   '当a大于100时
  if b>20 then   '当b大于20时
     response.write c	'输出c	 
  elseif b<20 then		'b<20时
     response.write d   '输出d
  end if			
else
  response.Write "没有符合条件的答案"
end if




%>
</body>
</html>
