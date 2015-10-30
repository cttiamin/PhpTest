<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp" -->

<%
dim sqlstr,id,username,userpwd,fname,ssex,age,mail,quest,answer,regtime,jibie,is_shenhe
	id=request.form("id")
	username=request.form("username")
	userpwd=request.form("userpwd")
	fname=request.form("fname")
	ssex=request.form("ssex")
	age=request.form("age")
	mail=request.form("mail")
	quest=request.form("quest")
	answer=request.form("answer")
	regtime=request.form("regtime")
	jibie=request.form("jibie")
	is_shenhe=request.form("is_shenhe")

sqlstr="update huiyuan set username='"&username&"',userpwd='"&userpwd&"',fname='"&fname&"',ssex='"&ssex&"',age='"&age&"',mail='"&mail&"',quest='"&quest&"',answer='"&answer&"',regtime='"&regtime&"',jibie='"&jibie&"',is_shenhe='"&is_shenhe&"' where id="&id
	'response.write sqlstr
	'response.end
	  conn.execute sqlstr
     response.write("<script language=javascript>")
	response.write("alert ('ÐÞ¸Ä³É¹¦');")
	response.write("location='user_ls.asp';")
	response.write("</script>")

%>
