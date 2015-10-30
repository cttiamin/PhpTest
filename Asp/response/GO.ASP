<%Response.Buffer=true%>
<HTML>
<BODY>
<%
	select case Request.Form("add")
	case "tsinghua"
		Response.Redirect "http://www.tsinghua.edu.cn"
	case "yahoo"
		Response.Redirect "http://www.yahoo.com"
	case "sina"
		Response.Redirect "http://www.sina.com.cn"
	end select
%>
</BODY>
</HTML>
