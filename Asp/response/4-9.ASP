<%@ Language=VBScript %>
<%
Response.Expires=0
If Request.ServerVariables("Content_Length") <> 0 Then
'提交数据后,这个长度就不会是 0, 因此执行下面的语句, 将结果显示出来
'下面一部分实际上是照搬 wuf11.asp
	SName =Request.Form("yourname")   
	SGender =Request.Form("gender")
	SM = Request.Form("message")
	SMsg = Replace(SM,vbcrlf,"<Br>" & vbcrlf) 
%>
<HTML>
<BODY>
姓名: <%= SName%><Br><Br>
性别: <%= SGender%><Br><Br>
<% 
Response.Write "爱好:<Br>"
For I = 1 to Request.Form("hobby").Count
	Response.Write Request.Form("hobby")(I) & "<Br>"
Next
%>
留言: <Br><Br>
<%= SMsg%><Br><Br>
</BODY>
</HTML>

<%
Else
'当第一次加载页面时,没有提交任何数据,故前面一部分并不执行,而是从这里开始
'这也就是为什么会有两对 <HTML></HTML> 的原因
'下面照搬 wuf10.htm 就行了
'<form method="post" action="wuf11.asp"> 给用环境变量替换掉了, 其实完全一样
%>
<HTML><BODY>
	<!-- 获取自己文件名-->
<form method="post" action="<%= Request.ServerVariables("Script_name")%>">
  姓名： <input type="text" name="yourname"><br>
  性别： <select name="gender">
    <option>男</option>
    <option>女</option>
  </select> <br>
  爱好：<br> 
  <input name="hobby" type="checkbox" value="电脑">电脑
  <input name="hobby" type="checkbox" value="游戏">游戏
  <input name="hobby" type="checkbox" value="体育">体育
  <input name="hobby" type="checkbox" value="阅读">阅读
  <br>
  留言： <textarea name="message">
  </textarea>  <br>
  <input type="submit" name="Submit" value="提交">
  <input type="reset" name="Submit2" value="重置">
  </form>
</BODY>
</HTML>
<%End If%>
