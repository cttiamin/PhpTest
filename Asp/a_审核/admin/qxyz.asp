<%
flag=session("flag")
adminuser=session("adminuser")
if adminuser="" then
		  response.write("<script language=javascript>")
		  response.write("alert('你还没有登录,不能访此页面');")
		  response.write("location='login.asp';")
		  response.write("</script>")
end if
%>
