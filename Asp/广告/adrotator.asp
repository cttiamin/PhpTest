<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<% Response.Expires=0 %>
<html>
<body>
<% 
dim context
context=request.QueryString("url")
if context<>"" then
response.Redirect(request.QueryString("url"))
end if
%>

<%
    set ad=server.CreateObject("MSWC.AdRotator")
	ad.Border=1
	ad.Clickable=true
	ad.TargetFrame="target='_new'"   '�µ���һ�����ڣ�������
	response.Write( ad.GetAdvertisement("adrot.txt"))'�ƻ��ļ���·��
	
%>
</body></html>