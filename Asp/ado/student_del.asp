<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
dim conn,id,sqlstr
	set conn=server.CreateObject("adodb.connection")
	conn.open "Driver={sql server};uid=sa;pwd=sa;database=student;server=(local)"
	'response.Write "�����ݿ��Ѿ�����ɳ�"
	id=request.QueryString("ID")
if id="" then

		response.write "�������"
else

	sqlstr="delete from students where ID="& id
	conn.execute sqlstr
	response.Write "�Ѿ��ɹ�ɾ��"
end if
	conn.close
	set conn=nothing

%>
