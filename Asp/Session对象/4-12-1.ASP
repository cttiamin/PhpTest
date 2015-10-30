<HTML>
<HEAD>
<TITLE> New Document </TITLE>
</HEAD>
<BODY BGCOLOR="#FFFFFF">
提交成功，欢迎光临！
<form method="post" action="4-12-2.asp">
  姓名： <input type="text" name="yourname"><br>
 <input type="submit" name="Submit" value="提交">
  <input type="reset" name="Submit2" value="重置">
</form>
<%
Session("name")=Request.Form("yourname")  '写入session
Session("gender")=Request.Form("gender")	'写入session 性别	
Session("hobby")=Request.Form("hobby")		'写入session  爱好
%>
</BODY>
</HTML>