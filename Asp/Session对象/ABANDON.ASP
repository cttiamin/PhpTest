<%
Session("name")="grandia"
Session.Abandon   '等本页结束后才取消session.的会话
Response.Write Session("name")
%>