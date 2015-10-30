<%
yname=Request.Form("yourname")	'获取session
name=Session("name")		
gender=Session("gender")
hobby=Session("hobby")
IF name<>yname THEN			'如果 name  不等于 yname   
	Response.Write("对不起！您输入的名字不正确。请重新输入。<br>")		'则输出
	%>
	<form method="post" action="4-12-2.asp">
	姓名： <input type="text" name="yourname"><br>
	<input type="submit" name="Submit" value="提交">
	<input type="reset" name="Submit2" value="重置">
<%ELSE									'如果等于则输出
Response.Write("姓名："&name&"<br>")
Response.Write("性别："&gender&"<br>")
Response.Write("爱好：<br>"&hobby&"<br>")
%>
<a href="4-12.htm">我想重填!</a>		
<%END IF%>								