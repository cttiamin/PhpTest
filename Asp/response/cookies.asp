<HTML>

<BODY bgcolor=lavender>
<%
Response.Cookies("nk")="gyli"
response.cookies("nk").expires="sep 1,2006"
response.write request.Cookies("nk")


%>

</body>
</html>
