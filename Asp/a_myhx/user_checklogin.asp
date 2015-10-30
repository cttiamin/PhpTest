<%@ Language=VBScript %>

<!--#include file="include/conn.asp" -->

<%
'如果提交了登陆信息进行处理，否则显示登陆界面
if request.Form("usercode")<>"" then

	usercode = fixedReplaceStr(Request.Form("usercode"), 20)
	userpass = fixedReplaceStr(Request.Form("userpass"), 20)


	set cn = Server.CreateObject("ADODB.Connection")
	cn.Open mycnstr

	set rs = Server.CreateObject("ADODB.RecordSet")
	sql = "select * from userinfo where usercode='" & usercode & "'"
	rs.Open sql, cn, 0, 2, 1

	if rs.EOF then
			response.write"<script>alert('此用户不存在');history.back();</script>"
		Response.End 

	elseif rs("userpass") <> userpass then
			response.write"<script>alert('用户名不存在或密码错误!');history.back();</script>"
	else
		Session("usercode") = usercode
		Session("realname") = rs("realname")
		Session("userno") = rs("userno")
		Session("flag") = rs("flag")
		Session("ipaddress") = Request.ServerVariables("REMOTE_ADDR")

		rs("logincount") = rs("logincount") + 1
		rs("ipaddress") = Request.ServerVariables("REMOTE_ADDR")
		rs("logintime") = now()
		rs.Update

		rs.Close
		set rs = nothing
		cn.Close
		set cn = nothing
		
		Response.Redirect("index.asp)
	end if

end if
%>
