<%@ Language=VBScript %>

<!--#include file="include/conn.asp" -->

<%
'����ύ�˵�½��Ϣ���д���������ʾ��½����
if request.Form("usercode")<>"" then

	usercode = fixedReplaceStr(Request.Form("usercode"), 20)
	userpass = fixedReplaceStr(Request.Form("userpass"), 20)


	set cn = Server.CreateObject("ADODB.Connection")
	cn.Open mycnstr

	set rs = Server.CreateObject("ADODB.RecordSet")
	sql = "select * from userinfo where usercode='" & usercode & "'"
	rs.Open sql, cn, 0, 2, 1

	if rs.EOF then
			response.write"<script>alert('���û�������');history.back();</script>"
		Response.End 

	elseif rs("userpass") <> userpass then
			response.write"<script>alert('�û��������ڻ��������!');history.back();</script>"
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
