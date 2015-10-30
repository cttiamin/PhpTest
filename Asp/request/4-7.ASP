<%@ Language=VBScript %>
<% 
Response.Expires=0
SName = Request.Form("yourname") 
SGender = Request.Form("gender")
SM =Request.Form("message")
SMsg=SM
'SMsg = Replace(SM,vbcrlf,"<Br>" & vbcrlf) 
' vbcrlf相当于回车符和换行符的组合。至于Replace函数,其作用就是将字符串StrM中的vbcrlf替换为"<Br>" & vbcrlf（请思考这个vbcrlf有什么用？查看输出文件的HTML源码就明白了），详细请参考VBScript帮助。
%>
<HTML>
<BODY>
姓名: <%= SName%><Br><Br>
性别: <%= SGender%><Br><Br>
<%  '先把上面看懂, 有兴趣再看看如何读取多个选项
Response.Write "爱好:<Br>"
For I = 1 to Request.Form("hobby").Count
	Response.Write Request.Form("hobby")(I) & "<Br>"
Next
%>
<Br>
留言: <Br>
<%= SMsg%><Br><Br>
</BODY>
</HTML>
