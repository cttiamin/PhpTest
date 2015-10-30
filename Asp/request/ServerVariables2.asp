<HTML>

<BODY bgcolor=lavender>
你的Server_PORT的值是:
<%=request.servervariables("server_port")%><p>
你的服务器的计算机名为：
<%=request.servervariables("server_name")%><p>
当前运行的程序的路径为：
<%=request("script_name")%>
<p>
你的ip地址是：
<%=request("remote_addr")%>
<p>
你的请求方式是：
<%=request("request_method")%>
<br>
</body>
</html>
