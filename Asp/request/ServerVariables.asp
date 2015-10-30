<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<HTML>
<!-- This example displays the content of several ServerVariables. --> 
ALL_HTTP server variable = 
<%= Request.ServerVariables("ALL_HTTP") %> <BR>
<!-- 头信息，浏览器信息-->
CONTENT_LENGTH server variable = 
<%= Request.ServerVariables("CONTENT_LENGTH") %> <BR> 
<!-- 提交内容(返回数据)长度-->
CONTENT_TYPE server variable =
<!-- 提交内容(返回数据)类型-->
<%= Request.ServerVariables("CONTENT_TYPE") %> <BR>
QUERY_STRING server variable = 
<!-- 提交内容若为get,返回字符串，若为POST 则为空-->
<%= Request.ServerVariables("QUERY_STRING") %> <BR> 
SERVER_SOFTWARE server variable = 
<!-- 服务器的软名称-->
<%= Request.ServerVariables("SERVER_SOFTWARE") %> <BR> 
sdfsad
</HTML>
