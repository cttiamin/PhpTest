<%
Response.buffer=true ' 开启缓冲页面功能
Response.ContentType="text/HTML"
Response.Charset="gb2312"
user=Request.Form("username")
pwd=Request.Form("password")
say=Request.QueryString("say")
%>
	<form method="POST" action="4-5.asp">
　　<p> 用户名 :<input type="text" name="username" size="12"><br>
口&nbsp;&nbsp;令 :<input type="password" name="password" size="12"><br>
　　<input type="submit" value=" 提交 " name="B1"><input type="reset" value=" 取消 " name="B2"></p></form>
<%
If say=1 then
	Response.Write "<p>欢迎grandia光临 !"
End If
If say > 1 then
	Response.Write " <p>欢迎再次光临 !"
	Response.Write("huanyingguanglin")
End If
If user="grandia" and pwd="grandia" Then
	Response.Expires=1 ' 设置该页面在浏览器的缓冲中存储 1 分钟后过期。
	flag=1
ElseIf user="guest" and pwd="guest" Then
	Response.Expires=0 ' 使缓存的页面立即过期。
	Response.Clear ' 清空存储在缓存中的页面 
	flag=2
ElseIf user="zy" and pwd="zy" Then
	Response.Write " 欢迎 ZY 光临 "
	flag=3
Else
	flag=0
	Response.End ' 立即停止脚本处理，并将缓存中的页面输出
End If
	Response.write "<p><a href='4-5b.asp?flag="&flag&"'> ASP动态网站设计与制作 </a></p>" 
' 将变量 flag 的值传送给 4-5b.asp
%>
