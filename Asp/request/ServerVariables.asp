<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<HTML>
<!-- This example displays the content of several ServerVariables. --> 
ALL_HTTP server variable = 
<%= Request.ServerVariables("ALL_HTTP") %> <BR>
<!-- ͷ��Ϣ���������Ϣ-->
CONTENT_LENGTH server variable = 
<%= Request.ServerVariables("CONTENT_LENGTH") %> <BR> 
<!-- �ύ����(��������)����-->
CONTENT_TYPE server variable =
<!-- �ύ����(��������)����-->
<%= Request.ServerVariables("CONTENT_TYPE") %> <BR>
QUERY_STRING server variable = 
<!-- �ύ������Ϊget,�����ַ�������ΪPOST ��Ϊ��-->
<%= Request.ServerVariables("QUERY_STRING") %> <BR> 
SERVER_SOFTWARE server variable = 
<!-- ��������������-->
<%= Request.ServerVariables("SERVER_SOFTWARE") %> <BR> 
sdfsad
</HTML>
