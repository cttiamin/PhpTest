
<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp" -->
<%
dim id
id=request.QueryString("id")
ls=request.QueryString("ls")
if ls="0" then
  sqlstr="update huiyuan set is_shenhe=1 where id="&id
  conn.execute sqlstr
	  response.write("<script language=javascript>")
	  response.write("alert('审核成功');")
	  response.write("location='user_ls.asp';")
	  response.write("</script>")
end if
if ls="1" then 
  sqlstr="update huiyuan set is_shenhe=0 where id="&id
  conn.execute sqlstr
	  response.write("<script language=javascript>")
	  response.write("alert('取消审核成功');")
	  response.write("location='user_ls.asp';")
	  response.write("</script>")
end if
%>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
</body>
</html>
