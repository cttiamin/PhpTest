<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<%
dim conn,id,sqlstr
	set conn=server.CreateObject("adodb.connection")
	conn.open "Driver={sql server};uid=sa;pwd=sa;database=student;server=(local)"
	'response.Write "和数据库已经连结成成"
	id=request.QueryString("ID")
if id="" then

		response.write "输入错误"
else

	sqlstr="delete from students where ID="& id
	conn.execute sqlstr
	response.Write "已经成功删除"
end if
	conn.close
	set conn=nothing

%>
