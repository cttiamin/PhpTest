<HTML>

<BODY bgcolor=lavender>
���Server_PORT��ֵ��:
<%=request.servervariables("server_port")%><p>
��ķ������ļ������Ϊ��
<%=request.servervariables("server_name")%><p>
��ǰ���еĳ����·��Ϊ��
<%=request("script_name")%>
<p>
���ip��ַ�ǣ�
<%=request("remote_addr")%>
<p>
�������ʽ�ǣ�
<%=request("request_method")%>
<br>
</body>
</html>
