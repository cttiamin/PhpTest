<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ޱ����ĵ�</title>
</head>

<body>
<%
  response.Write("hello asp")
  response.flush()
  response.Write("flush ���֮��buffer=false")
%>
<form>
<input type="text" >
<input type="button" value="��ʾ��">
</form>

</body>
</html>