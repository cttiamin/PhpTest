<%
say=Request.QueryString("flag")
Select case say
case "1"
	Response.Redirect "4-5.asp?say=1"
case "2"
	Response.Redirect "4-5.asp?say=2"
case "3"
	Response.Redirect "4-5.asp?say=3"
case "0"
	Response.Redirect "4-5.asp?say=0"
End Select
%>
