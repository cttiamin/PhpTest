<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<% 
Response.Write " 欢迎 "&Request.Cookies("nick")&" 光临！" 
%> 
<form id="form1" name="form1" method="get" action="">
  <input name="name1" type="hidden" value="<%=Request.Cookies("nick")%>" />
请搜索  
<input type="text" name="name2" />
<input type="submit" name="Submit" value="提交" />
</form>
</body>
</html>
