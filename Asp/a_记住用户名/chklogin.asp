<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
user="abcd"
passwd="123456"
dim username,pwd
username=request.Form("username")
pwd=request.Form("pwd")
if username=user and pwd=passwd then
    response.Cookies("aa")=username
	response.Redirect("cccc.asp")
else
   response.Redirect("error.asp")
end if

%>