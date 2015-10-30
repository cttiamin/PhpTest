<HTML>
<HEAD><TITLE>页面计数器示例</TITLE></HEAD>
<BODY>
<%
Set WHits=Server.CreateObject("MSWC.PageCounter")
WHits.PageHit()
%>
此页面被访问了<%=WHits.hits %> 次
</Body>
</HTML>
