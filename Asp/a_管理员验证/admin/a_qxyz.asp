<%
flag=session("flag")
adminuser=session("adminuser")
if adminuser="" then
		  response.write("<script language=javascript>")
		  response.write("alert('�㻹û�е�¼,���ܷô�ҳ��');")
		  response.write("location='a_login.asp';")
		  response.write("</script>")
end if
%>
