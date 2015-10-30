<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<p>
  <%
  response.write request("name1")&"<br>前"
session("name1")=request("name1")
session("age")=request("age")
%>
</p>
<p>你的大名是:<%=session("name1")%> <a href="session1.asp">现在转到</a> </p>
<form id="form1" name="form1" method="post" action="">
  <p>请输入用户名
    <input type="text" name="name1" />
  </p>
  <p>你的年龄是:
    <input type="text" name="age" />
    <input type="submit" name="Submit" value="提交" />
    </p>
</form>
</body>
</html>
