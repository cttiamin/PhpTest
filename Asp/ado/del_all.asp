<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp" -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<%
dim ID,i,sqlstr
 ID=request.Form("ID")
 if request.form("del")="清空所有记录" then
	 sqlstr="delete from students"
	 conn.execute sqlstr
	 conn.close
	 set conn=nothing
	 response.write"学生表中已没有记录存在"
 else
	 if ID<>"" then
			 for i=1 to request.form("ID").count
				 sqlstr="delete from students where ID="&request.form("ID")(i)
				 conn.execute sqlstr
			 next
		 conn.close
		 set conn=nothing
		 response.Write"记录已经被删除"
	 else
	 response.write "你没有选择任何记录"
	 end if
end if
%>
</body>
</html>
