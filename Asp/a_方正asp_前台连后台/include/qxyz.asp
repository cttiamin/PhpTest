<%
dim adminuser
adminuser=session("adminuser")
if adminuser="" then
  response.Redirect("../login.asp")
end if
%>