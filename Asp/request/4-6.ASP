<%@ Language=VBScript %>
<%  
Response.Expires=0 
Sname =Request.QueryString("name")
Spwd =Request.QueryString("pwd")   
SGender =Request.QueryString("gender")

%>
<HTML>
<BODY>
姓名: <%= Sname%><Br><Br>
密码: <%= Spwd%><Br><Br>
性别: <%= SGender%><br>
<Br>
<Br><br>
<br>

URL后面的字符串: <Br>
<%= Request.ServerVariables("Query_String")%>
</BODY>
</HTML>
