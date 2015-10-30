<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
dim uname,sex
sex=request.Form("sex")

uname=request.Form("username")
if uname<>"" then
	if uname="马壮" then
	
		response.Cookies("aa")=uname  
		response.Redirect("cccc.asp")
	else
	  response.Redirect("error.asp")
	end if
end if
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>请输入你的用户名:
    <input name="username" type="text" id="username" />
</p>
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="Submit" value="登录" /> 
    <a href="cccc.asp">查看cookie
  </a></p>
</form>
</body>
</html>
